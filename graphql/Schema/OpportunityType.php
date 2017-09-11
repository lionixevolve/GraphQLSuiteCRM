<?php

use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;
use Youshido\GraphQL\Type\Scalar\DateType;
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
require_once 'modules/AOS_Contracts/AOS_Contracts.php';
require_once 'modules/AOS_Invoices/AOS_Invoices.php';
require_once 'modules/Prospects/Prospect.php';
require_once 'modules/ProspectLists/ProspectList.php';
require_once 'modules/Cases/Case.php';
require_once 'modules/Meetings/Meeting.php';
require_once 'modules/Tasks/Task.php';
require_once 'modules/Documents/Document.php';
require_once 'include/utils.php';
require_once 'include/formbase.php';

class OpportunityType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach ( argsHelper::entityArgsHelper('Opportunity') as $field => $type){
            $config->addField($field, $type);
        }
        $config->addField('contacts', [
                'type'=> new ContactsListType(),
                'args' => argsHelper::entityArgsHelper('Contacts'),
                'resolve' => function ($value, $args, ResolveInfo $info) {
                    if (!empty($value['contacts'])) {
                        $args['ids']=$value['contacts'];
                        return ContactsListType::resolve($value, $args,$info);
                    } else {
                        return null;
                    }
                },
        ]);
        $config->addField('notes', [
                'type' => new NotesListType(),
                'args' => argsHelper::entityArgsHelper('Notes'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    if (!empty($value['notes'])) {
                        $args['ids']=$value['notes'];
                        return NotesListType::resolve($value, $args, $info);
                    } else {
                        return null;
                    }
                 },
         ]);
        $config->addField('account_details', [
                'type'=> new AccountType(),
                'resolve' => function ($value, $args, ResolveInfo $info) {
                    if (!empty($value['account_id'])) {
                        $args['id']=$value['account_id'];
                        return AccountType::resolve($value, $args,$info);
                    } else {
                        return null;
                    }
                },
        ]);
        $config->addField('calls', [
                'type'=> new CallsListType(),
                'args' => argsHelper::entityArgsHelper('Calls'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    if (!empty($value['calls'])) {
                        $args['ids']=$value['calls'];
                        return CallsListType::resolve($value, $args,$info);
                    } else {
                        return null;
                    }
                },
        ]);
        $config->addField('aos_quotes', [
            'type'=> new QuotesListType(),
            'args' => argsHelper::entityArgsHelper('AOS_Quotes'),
            'resolve' => function ($value, $args, ResolveInfo $info) {
                if (!empty($value['aos_quotes'])) {
                    $args['ids']=$value['aos_quotes'];
                    return QuotesListType::resolve($value, $args,$info);
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

    public function resolve($value = null, $args = [], ResolveInfo $info = null){
        if (isset($args['id']) && is_array($args['id'])) {
            // We received a list of contacts to return
            foreach ($args as $key => $opportunityId) {
                if (isset($opportunityId) && is_array($opportunityId)) {
                    foreach ($opportunityId as $key => $opportunityIdItem) {

                        $resultArray[] = self::retrieve($opportunityIdItem, $info);
                    }
                } elseif (!empty($opportunityId)) {
                    $resultArray[] = self::retrieve($opportunityId, $info);
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
        $opportunityBean = BeanFactory::getBean('Opportunities');
        $opportunity = $opportunityBean->retrieve($id);
        $module_arr = array();
        if ($opportunity->id && $opportunity->ACLAccess('view')) {
            $all_fields = $opportunity->column_fields;
            foreach ($all_fields as $field) {
                if (isset($opportunity->$field) && !is_object($opportunity->$field)) {
                    $opportunity->$field = from_html($opportunity->$field);
                    $opportunity->$field = preg_replace("/\r\n/", '<BR>', $opportunity->$field);
                    $opportunity->$field = preg_replace("/\n/", '<BR>', $opportunity->$field);
                    $module_arr[$field] = $opportunity->$field;
                }
            }
            if($info!=null){
                $getFieldASTList=$info->getFieldASTList();
                $queryFields=[];
                foreach ($getFieldASTList as $key => $value) {
                    $queryFields[$value->getName()]="";
                }
            }
            if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                $opportunity->load_relationship('contacts');
                $module_arr['contacts'] =  array();
                foreach ($opportunity->contacts->getBeans() as $contact) {
                    $module_arr['contacts'][] = $contact->id;
                }
            }
            if(isset($queryFields) && array_key_exists('notes',$queryFields)){
                $module_arr['notes'] =  array();
                foreach ($opportunity->get_linked_beans('notes') as $note) {
                    $module_arr['notes'][] = $note->id;
                }
            }
            if(isset($queryFields) && array_key_exists('account_id',$queryFields)){
                $opportunity->load_relationship('accounts');
                foreach ($opportunity->accounts->getBeans() as $account) {
                    $module_arr['account_id'] = $account->id;
                }
            }
            if(isset($queryFields) && array_key_exists('aos_quotes',$queryFields)){
                $opportunity->load_relationship('aos_quotes');
                $module_arr['aos_quotes'] =  array();
                foreach ($opportunity->aos_quotes->getBeans() as $aos_quote) {
                    $module_arr['aos_quotes'][] = $aos_quote->id;
                }
            }
            if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                $module_arr['calls'] =  array();
                foreach ($opportunity->get_linked_beans('calls') as $call) {
                    $module_arr['calls'][] = $call->id;
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

            return $module_arr;
        } else {
            // Error
            error_log('Error resolving OpportunityType');

            return;
        }
    }

    public function getName()
    {
        return "Opportunity";  // important to use the real name here, it will be used later in the Schema
    }

}
