<?php
// namespace SuiteCRM\Schema;

use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\ListType\AbstractListType;
use Youshido\GraphQL\Type\TypeMap ;
use Youshido\GraphQL\Execution\ResolveInfo;

require_once 'CampaignType.php';

if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once 'data/SugarBean.php';
require_once 'include/entryPoint.php';
require_once 'config.php';
require_once 'include/utils.php';
require_once 'include/TimeDate.php';
require_once 'modules/ACLRoles/ACLRole.php';
require_once 'include/SugarLogger/LoggerManager.php';
require_once 'modules/Opportunities/Opportunity.php';
require_once 'modules/Contacts/Contact.php';
require_once 'modules/Accounts/Account.php';
require_once 'modules/Calls/Call.php';
require_once 'modules/Leads/Lead.php';
require_once 'modules/AOS_Contracts/AOS_Contracts.php';
require_once 'modules/AOS_Invoices/AOS_Invoices.php';
require_once 'modules/Prospects/Prospect.php';
require_once 'modules/ProspectLists/ProspectList.php';
require_once 'modules/Cases/Case.php';
require_once 'modules/Campaigns/Campaign.php';
require_once 'modules/Meetings/Meeting.php';
require_once 'modules/Tasks/Task.php';
require_once 'modules/Documents/Document.php';
require_once 'include/utils.php';
require_once 'include/formbase.php';
require_once 'graphql/Schema/searchHelper.php';

class CampaignsListType extends AbstractListType
{
    public function getItemType()
    {
        return new CampaignType();
    }

    public function build($config)
    {
        // $config
        // ->addArgument('limit', TypeMap::TYPE_INT)
        // ->addArgument('offset', TypeMap::TYPE_INT);
    }
    public function endswith($string, $test)
    {
        $strlen = strlen($string);
        $testlen = strlen($test);
        if ($testlen > $strlen) {
            return false;
        }
        return substr_compare($string, $test, $strlen - $testlen, $testlen) === 0;
    }
    public function resolve($value = null, $args = [], $info = null)
    {
        global $sugar_config, $current_user;
        // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($args, 1), FILE_APPEND);
        $campaignBean = BeanFactory::getBean('Campaigns');
        $searchParams = '';
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
        }
        $arrayKeys = array_keys($args);
        $this->bean = $campaignBean;
        $searchFields="";
        $moduleFields=$this->bean->field_name_map;
        //we hardcode the IDS field as available to this modules
        $moduleFields['ids']="enabled";
        foreach ($moduleFields as $key => $params) {
            if (in_array($key, $arrayKeys)) {
                if (substr_count($args[$key], ",")>0 || is_array($args[$key])) {
                    $guessOperator="in";
                    if(is_array($args[$key])){
                        $findValues=$args[$key];
                        //IDS doesn't exist in the database so we actually do a IN where to the ID field
                        $key='id';
                    }else{
                        $findValues=explode(",", $string = str_replace(' ', '', $args[$key]));
                    }
                } else {
                    if (substr_count($args[$key], '%')>0) {
                        $guessOperator="like";
                        $findValues=$args[$key];
                    } else {
                        $guessOperator="=";
                        $findValues=$args[$key];
                    }
                }
                $searchFields[$key] = array('query_type' => 'default', 'value' => $findValues, 'operator' => $guessOperator);
            }
        }
        foreach ($args as $key => $value) {
            if (!empty($key) && 0 === strpos($key, 'end_range_') ) {
                $searchFields[$key] = array('query_type' => 'default', 'value' => $value, 'enable_range_search'=> true, 'is_date_field'=>true);
            }
            elseif (!empty($key) &&  0 === strpos($key, 'start_range_') ) {
                $searchFields[$key] = array('query_type' => 'default', 'value' => $value, 'enable_range_search'=> true, 'is_date_field'=>true);
            }
        }

        $this->searchFields = $searchFields;
        //
        $searchParams=searchHelper::generateSearchWhere();
        $offset=0;
        $orderBy="name"; //TODO create a variable for this
        if(!empty($args['offset'])){
            $offset=$args['offset'];
        }
        $list=[];
        $aggregateList=[];
        //Limit is a SOFT limit, it doesn't actually get exactly the limit specified
        // its an approximation of list_max_entries_per_page
        // if limit = 25 , list_max_entries_per_page =20, available records = 50
        // it will return 40 records. This is beacuse get_list gets multiples of list_max_entries_per_page
        if(!empty($args['limit'])){
            if($args['limit']-$offset> $sugar_config['list_max_entries_per_page']){
                $loopTimes=ceil(($args['limit']-$offset)/$sugar_config['list_max_entries_per_page']);
                //We loop as many times needed to ensure we bring upto Limit records
                for($i=0;$i<$loopTimes;$i++){
                    $fullList = $campaignBean->get_list($orderBy, implode(" AND ", $searchParams), $offset);
                    // After the first get_list we have a row_count which give us exactly how many times
                    // we have to loop
                    $aggregateList=array_merge($aggregateList, $fullList['list']) ;
                    $offset=$offset+$sugar_config['list_max_entries_per_page'];
                    if(ceil($fullList['row_count']/$sugar_config['list_max_entries_per_page'])<=$i){
                        break;
                    }
                }
                $list['list']=$aggregateList;
            }else{
                $list = $campaignBean->get_list($orderBy, implode(" AND ", $searchParams), $offset);
            }
        }else{
            $list = $campaignBean->get_list($orderBy, implode(" AND ", $searchParams), $offset);
        }
        $resultArray = [];

        if (is_array($list['list']) && !empty($list['list'])) {
            // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($list, 1), FILE_APPEND);
            if($list['list'][0]->ACLAccess('list')){
                foreach ($list['list'] as $item) {
                    $resultArray[] = CampaignType::resolve(null, ['id' => $item->id], $info);
                }
            } else {
                //no access
                error_log('no access');
            }
            return empty($resultArray)? null :$resultArray;
        }else{
            return null;
        }
    }
}
