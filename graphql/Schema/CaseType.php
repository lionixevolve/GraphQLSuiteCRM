<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;

class CaseType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('Cases') as $field => $type) {
                $config->addField($field, $type);
        }
        $config->addField('notes', [
                'type' => new ListType(new NoteType()),
                'args' => argsHelper::entityArgsHelper('Notes'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    if (!empty($value['notes'])) {
                        $args['id']=$value['notes'];
                        return NotesListType::resolve($value, $args, $info);
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
          $config->addField('case_updates',[
                  'type' => new CaseupdatesListType(),
                  'args' => argsHelper::entityArgsHelper('AOP_Case_Updates'),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['case_updates'])) {
                          $args['id']=$value['case_updates'];
                          return CaseupdatesListType::resolve($value, $args, $info);
                      } else {
                          return null;
                      }
                   },
               ]);
          $config->addField('calls',[
                  'type' => new ListType(new CallType()),
                  'args' => argsHelper::entityArgsHelper('Calls'),
                  'resolve' => function ($value, array $args, ResolveInfo $info) {
                      if (!empty($value['calls'])) {
                          $args['id']=$value['calls'];
                          return CallsListType::resolve($value, $args, $info);
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
                             return ContactsListType::resolve($value, ['id' => $value['contacts']], $info);
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
                             return AccountsListType::resolve($value, ['id' => $value['accounts']], $info);
                         } else {
                             return null;
                         }
                    },
                ]);
        $config->addField('account_details', [
                    'type' => new AccountType(),
                    'args' => argsHelper::entityArgsHelper('Accounts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                         if (!empty($value['account_details'])) {
                             return AccountType::resolve($value, ['id' => $value['account_details']], $info);
                         } else {
                             return null;
                         }
                    },
                ]);

    }
    private function retrieveCase($id, $info)
    {
        global $sugar_config, $current_user;
        $caseBea = BeanFactory::getBean('Cases');
        $case = $caseBea->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }

        $module_arr = array();
        if ($case->id && $case->ACLAccess('view')) {
            $all_fields = $case->column_fields;
            foreach ($all_fields as $field) {
                if (isset($case->$field) && !is_object($case->$field)) {
                    $case->$field = from_html($case->$field);
                    $case->$field = preg_replace("/\r\n/", '<BR>', $case->$field);
                    $case->$field = preg_replace("/\n/", '<BR>', $case->$field);
                    $module_arr[$field] = $case->$field;
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
            if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                $module_arr['calls'] =  array();
                foreach ($case->get_linked_beans('calls') as $call) {
                    $module_arr['calls'][] = $call->id;
                }
            }
            if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                $module_arr['contacts'] =  array();
                foreach ($case->get_linked_beans('contacts', 'Contact') as $contact) {
                    $module_arr['contacts'][] = $contact->id;
                }
            }
            if(isset($queryFields) && array_key_exists('accounts',$queryFields)){
                $module_arr['accounts'] =  array();
                foreach ($case->get_linked_beans('accounts', 'Account') as $account) {
                    $module_arr['accounts'][] = $account->id;
                }
            }
            if(isset($queryFields) && array_key_exists('case_updates',$queryFields)){
                $module_arr['case_updates'] =   array();
                foreach ($case->get_linked_beans('aop_case_updates', 'AOP_Case_Updates') as $updates) {
                    $module_arr['case_updates'][] = $updates->id;
                }
            }

            if(isset($queryFields) && array_key_exists('notes',$queryFields)){
                $module_arr['notes'] =  array();
                foreach ($case->get_linked_beans('notes') as $note) {
                    $module_arr['notes'][] = $note->id;
                }
            }
            if(isset($queryFields) && array_key_exists('account_details',$queryFields)){
                    $module_arr['account_details'] = $case->account_id;
            }
            return $module_arr;
        } else {
            return null;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if (isset($args['id']) && is_array($args['id'])) {
            foreach ($args as $key => $caseId) {
                if (isset($caseId) && is_array($caseId)) {
                    foreach ($caseId as $key => $caseIdItem) {
                        $resultArray[] = self::retrieveCase($caseIdItem,$info);
                    }
                } elseif (!empty($caseId)) {
                    $resultArray[] = self::retrieveCase($caseId,$info);
                }
            }

            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveCase($args['id'],$info);
        }
    }

    public function getName()
    {
        return 'Case';  // important to use the real name here, it will be used later in the Schema
    }
}
