<?php
// namespace SuiteCRM\Schema;

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
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
require_once 'ContactType.php';
require_once 'modules/Accounts/Account.php';
require_once 'modules/Calls/Call.php';
require_once 'modules/Leads/Lead.php';
require_once 'modules/AOS_Quotes/AOS_Quotes.php';
require_once 'modules/AOS_Invoices/AOS_Invoices.php';
require_once 'modules/Prospects/Prospect.php';
require_once 'modules/ProspectLists/ProspectList.php';
require_once 'modules/Cases/Case.php';
require_once 'modules/Meetings/Meeting.php';
require_once 'modules/Tasks/Task.php';
require_once 'modules/Documents/Document.php';
require_once 'include/utils.php';
require_once 'include/formbase.php';

class QuoteType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach ( argsHelper::entityArgsHelper('AOS_Quotes') as $field => $type){
            $config->addField($field, $type);
        }

        $config->addField('billing_account_details', [
                'type'=> new AccountType(),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                     if (!empty($value['billing_account_details'])) {
                         $args['id']=$value['billing_account_details'];
                         return AccountType::resolve($value, $args,$info);
                     } else {
                         return null;
                     }
                 },
         ]);
        $config->addField('billing_contact_details', [
                'type'=> new ContactType(),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                     if (!empty($value['billing_contact_details'])) {
                         $args['id']=$value['billing_contact_details'];
                         return ContactType::resolve($value, $args,$info);
                     } else {
                         return null;
                     }
                 },
         ]);
         $config->addField('opportunity_details', [
                 'type'=> new OpportunityType(),
                 'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['created_user_details'])) {
                          $args['id']=$value['opportunity_details'];
                          return OpportunityType::resolve($value, $args,$info);
                      } else {
                          return null;
                      }
                  },
          ]);
          $config->addField('created_user_details', [
                  'type' => new UserType(),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['created_user_details'])) {
                          $args['id']=$value['created_user_details'];
                          return UserType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
           ]);
          $config->addField('assigned_user_details',[
                  'type' => new UserType(),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['assigned_user_details'])) {
                          $args['id']=$value['assigned_user_details'];
                          return UserType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
           ]);
          $config->addField('modified_user_details', [
                  'type' => new UserType(),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['modified_user_details'])) {
                          $args['id']=$value['modified_user_details'];
                          return UserType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
           ]);
    }

    public function resolve($value = null, $args = [], $info = null){
        if (isset($args['id']) && is_array($args['id'])) {

            // We received a list of contacts to return
            foreach ($args as $key => $accountId) {
                // error_log(__LINE__.print_r($args,1));
                if (isset($accountId) && is_array($accountId)) {
                    foreach ($accountId as $key => $accountIdItem) {

                        $resultArray[] = self::retrieve($accountIdItem, $info);
                    }
                } elseif (!empty($contactId)) {
                    $resultArray[] = self::retrieve($accountId, $info);
                }
            }

            return $resultArray;
        } else {

            // We received a list of contacts to return
            if (!empty($args['id'])) {
                return self::retrieve($args['id'], $info);
            }
        }
    }

    public function retrieve($id, $info=null)  // implementing resolve function
    {
        global $sugar_config, $current_user;
        $quoteBean = BeanFactory::getBean('AOS_Quotes');
        $quote = $quoteBean->retrieve($id);
        $module_arr = array();
        if ($quote->id && $quote->ACLAccess('view')) {
            $all_fields = $quote->column_fields;
            foreach ($all_fields as $field) {
                if (isset($quote->$field) && !is_object($quote->$field)) {
                    $quote->$field = from_html($quote->$field);
                    $quote->$field = preg_replace("/\r\n/", '<BR>', $quote->$field);
                    $quote->$field = preg_replace("/\n/", '<BR>', $quote->$field);
                    $module_arr[$field] = $quote->$field;
                }
            }
            if($info!=null){
                $getFieldASTList=$info->getFieldASTList();
                $queryFields=[];
                foreach ($getFieldASTList as $key => $value) {
                    $queryFields[$value->getName()]="";
                }
            }
            if(isset($queryFields) && array_key_exists('modified_user_details',$queryFields)){
                $module_arr['modified_user_details']=$module_arr['modified_user_id'];
            }
            if(isset($queryFields) && array_key_exists('assigned_user_details',$queryFields)){
                $module_arr['assigned_user_details']=$module_arr['assigned_user_id'];
            }
            if(isset($queryFields) && array_key_exists('created_user_details',$queryFields)){
                $module_arr['created_user_details']=$module_arr['created_by'];
            }
            if(isset($queryFields) && array_key_exists('billing_account_details',$queryFields)){
                $module_arr['billing_account_details']=$module_arr['billing_account_id'];
            }
            if(isset($queryFields) && array_key_exists('billing_contact_details',$queryFields)){
                $module_arr['billing_contact_details']=$module_arr['billing_contact_id'];
            }
            if(isset($queryFields) && array_key_exists('opportunity_details',$queryFields)){
                $module_arr['opportunity_details']=$module_arr['opportunity_id'];
            }

            return $module_arr;
        } else {
            // Error
            error_log('Error resolving QuoteType');

            return;
        }
    }

    public function getName()
    {
        return 'Quote';  // important to use the real name here, it will be used later in the Schema
    }
}
