<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\ListType\ListType;
require_once 'argsHelper.php';

class NoteType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('Notes') as $field => $type) {
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
         $config->addField('contact_details', [
                 'type' => new ContactType(),
                 'resolve' => function ($value, array $args, ResolveInfo $info) {
                     if (!empty($value['contact_details'])) {
                         $args['id']=$value['contact_details'];
                         return ContactType::resolve($value, $args, $info);
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
                             $args['id']=$value['parent_contact'];
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
                              $args['id']=$value['parent_opportunity'];
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
                              $args['id']=$value['parent_opportunity'];
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
                    },
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
                'type'=> new OpportunitiesListType(),
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
    }
    private function retrieveNote($id, $info)
    {
        global $sugar_config, $current_user;
        $noteBean = BeanFactory::getBean('Notes');
        $note = $noteBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }
        $module_arr = array();
        if ($note->id && $note->ACLAccess('view')) {
            $all_fields = $note->column_fields;
            foreach ($all_fields as $field) {
                if (isset($note->$field) && !is_object($note->$field)) {
                    $note->$field = from_html($note->$field);
                    $note->$field = preg_replace("/\r\n/", '<BR>', $note->$field);
                    $note->$field = preg_replace("/\n/", '<BR>', $note->$field);
                    $module_arr[$field] = $note->$field;
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
                    $module_arr['parent_case'] = '';
                    $module_arr['parent_email'] = '';
                    break;
                case 'Accounts':
                    $module_arr['parent_account'] = $module_arr['parent_id'];
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_opportunity'] = '';
                    $module_arr['parent_case'] = '';
                    $module_arr['parent_email'] = '';
                    break;
                case 'Opportunities':
                    $module_arr['parent_opportunity'] = $module_arr['parent_id'];
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_account'] = '';
                    $module_arr['parent_case'] = '';
                    $module_arr['parent_email'] = '';
                    break;
                case 'Cases':
                    $module_arr['parent_opportunity'] = $module_arr['parent_id'];
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_account'] = '';
                    $module_arr['parent_case'] = $module_arr['parent_id'];
                    $module_arr['parent_email'] = '';
                    break;
                case 'Emails':
                    $module_arr['parent_opportunity'] = '';
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_account'] = '';
                    $module_arr['parent_case'] = '';
                    $module_arr['parent_email'] = $module_arr['parent_id'];
                    break;
                default:
                    $module_arr['parent_opportunity'] = '';
                    $module_arr['parent_contact'] = '';
                    $module_arr['parent_account'] = '';
                    $module_arr['parent_case'] = '';
                    $module_arr['parent_email'] = '';
                    break;

                }
                if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                    $module_arr['contacts'] =  array();
                    foreach ($note->get_linked_beans('contacts', 'Contact') as $contact) {
                        $module_arr['contacts'][] = $contact->id;
                    }
                }
                if(isset($queryFields) && array_key_exists('accounts',$queryFields)){
                    $module_arr['accounts'] = array();
                    foreach ($note->get_linked_beans('accounts', 'Account') as $account) {
                        $module_arr['accounts'][] = $account->id;
                    }
                }
                if(isset($queryFields) && array_key_exists('opportunities',$queryFields)){
                    $module_arr['opportunities'] =  array();
                    foreach ($note->get_linked_beans('opportunities', 'Opportunity') as $opportunity) {
                        $module_arr['opportunities'][] = $opportunity->id;
                    }
                }
                $module_arr['contact_details'] =  array();
                if(isset($queryFields) && array_key_exists('contact_details',$queryFields)){
                        $module_arr['contact_details'] = $note->contact_id;
                }
            return $module_arr;
        } else {
            return null;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if (isset($args['id']) && is_array($args['id'])) {
            foreach ($args as $key => $noteId) {
                // error_log(__LINE__.print_r($args,1));
                if (isset($noteId) && is_array($noteId)) {
                    foreach ($noteId as $key => $noteIdItem) {
                        $resultArray[] = self::retrieveNote($noteIdItem, $info);
                    }
                } elseif (!empty($noteId)) {
                    $resultArray[] = self::retrieveNote($noteId, $info);
                }
            }

            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveNote($args['id'],$info);
        }
    }

    public function getName()
    {
        return 'Note';  // important to use the real name here, it will be used later in the Schema
    }
}
