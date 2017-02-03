<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;
require_once 'argsHelper.php';

class TaskType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r(argsHelper::entityArgsHelper('field'),1), FILE_APPEND);
        // error_log(__LINE__.print_r(argsHelper::entityArgsHelper('Calls'),1));
        foreach (argsHelper::entityArgsHelper('Tasks') as $field => $type) {
                $config->addField($field, $type);
        }
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
                    // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($value,1), FILE_APPEND);
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
        $config->addField('parent_contact', [
                    'type'     => new ContactType(),
                    'args' => argsHelper::entityArgsHelper('Contacts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                        if (!empty($value['parent_contact'])) {
                            $args['ids']=$value['parent_contact'];
                            return ContactType::resolve($value, $args, $info);
                        } else {
                            return null;
                        }
                   },
           ]);
        $config->addField('parent_account', [
                    'type' => new AccountType(),
                    'args' => argsHelper::entityArgsHelper('Accounts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['parent_account'])) {
                             $args['ids']=$value['parent_account'];
                             return AccountType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
            ]);
        $config->addField('related_contacts',[
                    'type' => new ContactsListType(),
                    'args' => argsHelper::entityArgsHelper('Contacts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['related_contacts'])) {
                             $args['ids']=$value['related_contacts'];
                             return ContactsListType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
                ]);
        $config->addField('related_accounts', [
                    'type' => new AccountsListType(),
                    'args' => argsHelper::entityArgsHelper('Accounts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['related_accounts'])) {
                              $args['ids']=$value['related_accounts'];
                             return AccountsListType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
                ]);
    }
    private function retrieveTask($id, $info)
    {
        global $sugar_config, $current_user;
        $taskBean = BeanFactory::getBean('Tasks');
        $task = $taskBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }

        $module_arr = array();
        if ($task->id && $task->ACLAccess('view')) {
            $all_fields = $task->column_fields;
            foreach ($all_fields as $field) {
                if (isset($task->$field) && !is_object($task->$field)) {
                    $task->$field = from_html($task->$field);
                    $task->$field = preg_replace("/\r\n/", '<BR>', $task->$field);
                    $task->$field = preg_replace("/\n/", '<BR>', $task->$field);
                    $module_arr[$field] = $task->$field;
                }
            }
            $module_arr['created_user_details'] = $module_arr['created_by'];
            $module_arr['assigned_user_details'] = $module_arr['assigned_user_id'];
            $module_arr['modified_user_details'] = $module_arr['modified_user_id'];
            switch ($module_arr['parent_type']) {
                case 'Contacts':
                    $module_arr['parent_contact'] = $module_arr['parent_id'];
                    $module_arr['parent_account'] = '';
                    $module_arr['parent_opportunity'] = '';
                    break;
                case 'Accounts':
                    $module_arr['parent_account'] = $module_arr['parent_id'];
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_opportunity'] = '';
                    break;
                case 'Opportunities':
                    $module_arr['parent_opportunity'] = $module_arr['parent_id'];
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_account'] = '';
                    break;
                default:
                    $module_arr['parent_opportunity'] = '';
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_account'] = '';
                    break;

                }
            foreach ($task->get_linked_beans('contacts', 'Contact') as $contact) {
                $module_arr['related_contacts'][] = $contact->id;
            }
            foreach ($task->get_linked_beans('accounts', 'Account') as $account) {
                $module_arr['related_accounts'][] = $account->id;
            }
            foreach ($task->get_linked_beans('opportunities', 'Opportunity') as $opportunity) {
                $module_arr['related_opportunities'][] = $opportunity->id;
            }
                // error_log(__METHOD__."----".__LINE__."----".print_r($module_arr['related_contacts'],1));
            return $module_arr;
        } else {
            error_log(__METHOD__.'----'.__LINE__.'----'.'error resolving CallType');
            return;
        }
    }

    public function resolve($value = null, $args = [], $info = null )  // implementing resolve function
    {
        // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($args, 1), FILE_APPEND);
        if (isset($args['id']) && is_array($args['id'])) {
            foreach ($args as $key => $taskId) {
                if (isset($taskId) && is_array($noteId)) {
                    foreach ($noteId as $key => $taskIdItem) {
                        $resultArray[] = self::retrieveTask($taskIdItem, $info );
                    }
                } elseif (!empty($taskId)) {
                    $resultArray[] = self::retrieveTask($taskId, $info );
                }
            }

            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveTask($args['id']);
        }
    }

    public function getName()
    {
        return 'Task';  // important to use the real name here, it will be used later in the Schema
    }
}
