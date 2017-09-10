<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;

require_once 'argsHelper.php';

class CaseupdatesType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('AOP_Case_Updates') as $field => $type) {
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
    private function retrieveCaseupdates($id, $info)
    {
        global $sugar_config, $current_user;
        $caseBean = BeanFactory::getBean('AOP_Case_Updates');
        $case = $caseBean->retrieve($id);
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


            if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                $module_arr['contacts'] =  array();
                foreach ($case->get_linked_beans('contacts', 'Contact') as $contact) {
                    $module_arr['contacts'][] = $contact->id;
                }
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
                        $resultArray[] = self::retrieveCaseupdates($caseIdItem,$info);
                    }
                } elseif (!empty($caseId)) {
                    $resultArray[] = self::retrieveCaseupdates($caseId,$info);
                }
            }

            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveCaseupdates($args['id'],$info);
        }
    }

    public function getName()
    {
        return 'AOP_Case_Updates';  // important to use the real name here, it will be used later in the Schema
    }
}
