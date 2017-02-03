<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;

require_once 'argsHelper.php';

class CallType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r(argsHelper::entityArgsHelper('Calls'),1), FILE_APPEND);
        foreach (argsHelper::entityArgsHelper('Calls') as $field => $type) {
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
                        // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($info->getFieldASTList(),1), FILE_APPEND);
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
        $config->addField('parent_opportunity', [
                    'type' => new OpportunityType(),
                    'args' => argsHelper::entityArgsHelper('Opportunities'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['parent_opportunity'])) {
                             $args['ids']=$value['parent_opportunity'];
                             return OpportunityType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
            ]);
        $config->addField('contacts',[
                    'type' => new ContactsListType(),
                    'args' => argsHelper::entityArgsHelper('Contacts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['contacts'])) {
                             $args['ids']=$value['contacts'];
                             return ContactsListType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                     }
                ]);
        $config->addField('accounts', [
                    'type' => new AccountsListType(),
                    'args' => argsHelper::entityArgsHelper('Accounts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['accounts'])) {
                             $args['ids']=$value['accounts'];
                             return AccountsListType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
                ]);
        $config->addField('opportunities', [
                    'type' => new OpportunitiesListType(),
                    'args' => argsHelper::entityArgsHelper('Opportunities'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['opportunities'])) {
                              $args['ids']=$value['opportunities'];
                             return OpportunitiesListType::resolve($value, $args, $info);
                         } else {
                             return null;
                         }
                    },
                ]);
        $config->addField('notes', [
                'type' => new ListType(new NoteType()),
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
    }
    private function retrieveCall($id, $info)
    {
        global $sugar_config, $current_user;
        $callBean = BeanFactory::getBean('Calls');
        $call = $callBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }

        $module_arr = array();
        if ($call->id && $call->ACLAccess('view')) {
            $all_fields = $call->column_fields;
            foreach ($all_fields as $field) {
                if (isset($call->$field) && !is_object($call->$field)) {
                    $call->$field = from_html($call->$field);
                    $call->$field = preg_replace("/\r\n/", '<BR>', $call->$field);
                    $call->$field = preg_replace("/\n/", '<BR>', $call->$field);
                    $module_arr[$field] = $call->$field;
                }
            }
            if(isset($queryFields) && array_key_exists('created_user_details',$queryFields)){
                $module_arr['created_user_details'] = $module_arr['created_by'];
            }

            if(isset($queryFields) && array_key_exists('assigned_user_details',$queryFields)){
                $module_arr['assigned_user_details'] = $module_arr['assigned_user_id'];
            }

            if(isset($queryFields) && array_key_exists('modified_user_details',$queryFields)){
                $module_arr['modified_user_details'] = $module_arr['modified_user_id'];
            }

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
                if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                    foreach ($call->get_linked_beans('contacts', 'Contact') as $contact) {
                        $module_arr['contacts'][] = $contact->id;
                    }
                }
                if(isset($queryFields) && array_key_exists('accounts',$queryFields)){
                        foreach ($call->get_linked_beans('accounts', 'Account') as $account) {
                            $module_arr['accounts'][] = $account->id;
                        }
                }
                if(isset($queryFields) && array_key_exists('opportunities',$queryFields)){
                    foreach ($call->get_linked_beans('opportunities', 'Opportunity') as $opportunity) {
                        $module_arr['opportunities'][] = $opportunity->id;
                    }
                }
                if(isset($queryFields) && array_key_exists('notes',$queryFields)){
                    foreach ($call->get_linked_beans('notes') as $note) {
                        $module_arr['notes'][] = $note->id;
                    }
                }


            return $module_arr;
        } else {
            error_log(__METHOD__.'----'.__LINE__.'----'.'error resolving CallType');
            return;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if (isset($args['id']) && is_array($args['id'])) {
            foreach ($args as $key => $callId) {
                if (isset($callId) && is_array($callId)) {
                    foreach ($callId as $key => $callIdItem) {
                        $resultArray[] = self::retrieveCall($callIdItem,$info);
                    }
                } elseif (!empty($callId)) {
                    $resultArray[] = self::retrieveCall($callId,$info);
                }
            }

            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveCall($args['id'],$info);
        }
    }

    public function getName()
    {
        return 'Call';  // important to use the real name here, it will be used later in the Schema
    }
}
