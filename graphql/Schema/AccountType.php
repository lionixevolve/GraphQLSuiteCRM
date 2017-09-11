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
require_once 'OpportunityType.php';
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

class AccountType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach ( argsHelper::entityArgsHelper('Accounts') as $field => $type){
            $config->addField($field, $type);
        }
        $config->addField('aos_quotes', [
            'type'=> new ListType(new QuoteType()),
            'args' => argsHelper::entityArgsHelper('AOS_Quotes'),
            'resolve' => function ($value, $args, ResolveInfo $info) {
                if (!empty($value['aos_quotes'])) {
                    $args['ids']=$value['aos_quotes'];
                    return QuoteType::resolve($value, $args,$info);
                } else {
                    return null;
                }
            },
        ]);
        $config->addField('calls', [
                'type'=> new ListType(new CallType()),
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
        $config->addField('cases', [
                'type'=> new ListType(new CaseType()),
                'args' => argsHelper::entityArgsHelper('Cases'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    if (!empty($value['cases'])) {
                        $args['ids']=$value['cases'];
                        return CasesListType::resolve($value, $args,$info);
                    } else {
                        return null;
                    }
                },
        ]);
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
        $config->addField('opportunities', [
                'type'=> new ListType(new OpportunityType()),
                'args' => argsHelper::entityArgsHelper('Opportunities'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                     if (!empty($value['opportunities'])) {
                         $args['ids']=$value['opportunities'];
                         return OpportunitiesListType::resolve($value, $args,$info);
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
          $config->addField('meetings', [
                  'type' => new MeetingsListType(),
                  'args' => argsHelper::entityArgsHelper('Meetings'),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['meetings'])) {
                          $args['ids']=$value['meetings'];
                          return MeetingsListType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
           ]);
          $config->addField('tasks', [
                  'type' => new TasksListType(),
                  'args' => argsHelper::entityArgsHelper('Tasks'),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['tasks'])) {
                          $args['ids']=$value['tasks'];
                          return TasksListType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
           ]);
          $config->addField('campaigns', [
                  'type' => new CampaignsListType(),
                  'args' => argsHelper::entityArgsHelper('Campaigns'),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['campaigns'][0])) {
                          $args['ids']=$value['campaigns'];
                          return CampaignsListType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
           ]);
    }

    public function resolve($value = null, $args = [], ResolveInfo $info = null){
        if (isset($args['id']) && is_array($args['id'])) {

            // We received a list of contacts to return
            foreach ($args as $key => $accountId) {
                if (isset($accountId) && is_array($accountId)) {
                    foreach ($accountId as $key => $accountIdItem) {

                        $resultArray[] = self::retrieve($accountIdItem, $info);
                    }
                } elseif (!empty($accountId)) {
                    $resultArray[] = self::retrieve($accountId, $info);
                }
            }

            return $resultArray;
        } else {
            if (!empty($args['id'])) {
                return self::retrieve($args['id'], $info);
            }
        }
    }

    public function retrieve($id, $info=null)  // implementing resolve function
    {
        global $sugar_config, $current_user;
        $accountBean = BeanFactory::getBean('Accounts');
        $account = $accountBean->retrieve($id);
        $module_arr = array();

        if ($account->id && $account->ACLAccess('view')) {
            $all_fields = $account->column_fields;
            foreach ($all_fields as $field) {
                if (isset($account->$field) && !is_object($account->$field)) {
                    $account->$field = from_html($account->$field);
                    $account->$field = preg_replace("/\r\n/", '<BR>', $account->$field);
                    $account->$field = preg_replace("/\n/", '<BR>', $account->$field);
                    $module_arr[$field] = $account->$field;
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
                $account->load_relationship('contacts');
                $module_arr['contacts'] =  array();
                foreach ($account->contacts->getBeans() as $contact) {
                    $module_arr['contacts'][] = $contact->id;
                }
            }
            if(isset($queryFields) && array_key_exists('aos_quotes',$queryFields)){
                $account->load_relationship('aos_quotes');
                $module_arr['aos_quotes'] =  array();
                foreach ($account->aos_quotes->getBeans() as $aos_quote) {
                    $module_arr['aos_quotes'][] = $aos_quote->id;
                }
            }
            if(isset($queryFields) && array_key_exists('opportunities',$queryFields)){
                $account->load_relationship('opportunities');
                $module_arr['opportunities'] =  array();
                foreach ($account->opportunities->getBeans() as $opportunity) {
                    $module_arr['opportunities'][] = $opportunity->id;
                }
            }
            if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                $module_arr['calls'] =  array();
                foreach ($account->get_linked_beans('calls') as $call) {
                    $module_arr['calls'][] = $call->id;
                }
            }
            if(isset($queryFields) && array_key_exists('cases',$queryFields)){
                $module_arr['cases'] =  array();
                foreach ($account->get_linked_beans('cases') as $case) {
                    $module_arr['cases'][] = $case->id;
                }
            }
            if(isset($queryFields) && array_key_exists('notes',$queryFields)){
                $module_arr['notes'] =  array();
                foreach ($account->get_linked_beans('notes') as $note) {
                    $module_arr['notes'][] = $note->id;
                }
            }
            if(isset($queryFields) && array_key_exists('meetings',$queryFields)){
                $module_arr['meetings'] =  array();
                foreach ($account->get_linked_beans('meetings') as $meeting) {
                    $module_arr['meetings'][] = $meeting->id;
                }
            }
            if(isset($queryFields) && array_key_exists('tasks',$queryFields)){
                $module_arr['tasks'] =  array();
                foreach ($account->get_linked_beans('tasks') as $task) {
                    $module_arr['tasks'][] = $task->id;
                }
            }
            if(isset($queryFields) && array_key_exists('campaigns',$queryFields)){
                $module_arr['campaigns'] =  array();
                foreach ($account->get_linked_beans('campaigns') as $campaign) {
                    $module_arr['campaigns'][] = $campaign->id;
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
            return null;
        }
    }

    public function getName()
    {
        return 'Account';  // important to use the real name here, it will be used later in the Schema
    }
}
