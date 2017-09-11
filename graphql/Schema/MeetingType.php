<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;
require_once 'argsHelper.php';

class MeetingType extends AbstractObjectType   // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('Meetings') as $field => $type) {
                $config->addField($field, $type);
        }
        $config->addField('created_user_details', [
                'type' => new UserType(),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return UserType::resolve(null, ['id' => $value['created_user_details']], $info);
                 },
         ]);
        $config->addField('assigned_user_details',[
                'type' => new UserType(),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return UserType::resolve(null, ['id' => $value['assigned_user_details']], $info);
                 },
         ]);
        $config->addField('modified_user_details', [
                'type' => new UserType(),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return UserType::resolve(null, ['id' => $value['modified_user_details']], $info);
                 },
         ]);
        $config->addField('parent_contact', [
                    'type'     => new ContactType(),
                    'args' => argsHelper::entityArgsHelper('Contacts'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                        if (!empty($value['parent_contact'])) {
                            return ContactType::resolve(null, ['id' => $value['parent_contact']], $info);
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
                             return AccountType::resolve(null, ['id' => $value['parent_account']], $info);
                         } else {
                             return null;
                         }
                    },
            ]);
        $config->addField('parent_opportunity', [
                'type'=> new ListType(new OpportunityType()),
                'args' => argsHelper::entityArgsHelper('Opportunities'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                     if (!empty($value['parent_opportunity'])) {
                         return OpportunityType::resolve($value, ['id' => $value['parent_opportunity']],$info);
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
    }
    private function retrieveMeeting($id, $info)
    {
        global $sugar_config, $current_user;
        $meetingBean = BeanFactory::getBean('Meetings');
        $meeting = $meetingBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }

        $module_arr = array();
        if ($meeting->id && $meeting->ACLAccess('view')) {
            $all_fields = $meeting->column_fields;
            foreach ($all_fields as $field) {
                if (isset($meeting->$field) && !is_object($meeting->$field)) {
                    $meeting->$field = from_html($meeting->$field);
                    $meeting->$field = preg_replace("/\r\n/", '<BR>', $meeting->$field);
                    $meeting->$field = preg_replace("/\n/", '<BR>', $meeting->$field);
                    $module_arr[$field] = $meeting->$field;
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
            if(isset($queryFields) && array_key_exists('contacts',$queryFields)){
                $module_arr['contacts'] =  array();
                foreach ($meeting->get_linked_beans('contacts', 'Contact') as $contact) {
                    $module_arr['contacts'][] = $contact->id;
                }
            }
            if(isset($queryFields) && array_key_exists('accounts',$queryFields)){
                $module_arr['accounts'] =  array();
                foreach ($meeting->get_linked_beans('accounts', 'Account') as $account) {
                    $module_arr['accounts'][] = $account->id;
                }
            }
            if(isset($queryFields) && array_key_exists('opportunities',$queryFields)){
                $module_arr['opportunities'] = array();
                foreach ($meeting->get_linked_beans('opportunities', 'Opportunity') as $account) {
                    $module_arr['opportunities'][] = $account->id;
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
            foreach ($args as $key => $meetingId) {
                if (isset($meetingId) && is_array($meetingId)) {
                    foreach ($meetingId as $key => $meetingIdItem) {
                        $resultArray[] = self::retrieveMeeting($meetingIdItem, $info );
                    }
                } elseif (!empty($meetingId)) {
                    $resultArray[] = self::retrieveMeeting($meetingId, $info );
                }
            }
            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveMeeting($args['id'], $info);
        }
    }

    public function getName()
    {
        return 'Meeting';  // important to use the real name here, it will be used later in the Schema
    }
}
