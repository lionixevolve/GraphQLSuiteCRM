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
        foreach (argsHelper::entityArgsHelper('Campaigns', true) as $field => $type) {
            $config->addField($field, $type);
        }
    }

    public function resolve($value = null, $args = [], $info = null)
    {
        require_once 'ListHelper.php';
        $list=ListHelper('Campaigns', $value, $args, $info);
        $resultArray = [];

        if (is_array($list['list']) && !empty($list['list'])) {
            if ($list['list'][0]->ACLAccess('list')) {
                foreach ($list['list'] as $item) {
                    $resultArray[] = CampaignType::resolve(null, ['id' => $item->id], $info);
                }
            } else {
                error_log('no access');
            }
            return empty($resultArray)? null :$resultArray;
        } else {
            return null;
        }
    }
}
