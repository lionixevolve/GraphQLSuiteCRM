<?php

use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Execution\ResolveInfo;
class ContactType extends AbstractObjectType // extending abstract Object type
{
    public function build($config)  // implementing an abstract function where you build your type
    {
        foreach (argsHelper::entityArgsHelper('Contact') as $field => $type) {
            $config->addField($field, $type);
        }
        $config->addField('email1', new StringType());
        $config->addField('calls',[
                    'type' => new ListType(new CallType()),
                    'args' => argsHelper::entityArgsHelper('Call'),
                    'resolve' => function ($value, array $args, ResolveInfo $info) {
                        //  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/mylog.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ".  print_r($info, 1), FILE_APPEND);
                        $args['id']=$value['calls'];
                         return CallsListType::resolve($value, $args, $info);
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
        $config->addField('accounts', [
              'type' => new AccountsListType(),
              'args' => argsHelper::entityArgsHelper('Account'),
              'resolve' => function ($value, array $args, ResolveInfo $info) {
                  if (!empty($value['accounts'])) {
                      $args['ids']=$value['accounts'];
                      return AccountsListType::resolve($value, $args, $info);
                  } else {
                      return null;
                  }
              },
        ]);
        $config->addField('campaigns', [
                'type' => new CampaignsListType(),
                'args' => argsHelper::entityArgsHelper('Campaign'),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    if (!empty($value['campaigns'][0])) {
                        $args['ids']=$value['campaigns'];
                        return CampaignsListType::resolve($value, $args, $info);
                    } else {
                        return null;
                    }
                 },
         ]);
         $config->addField('tasks', [
                 'type' => new TasksListType(),
                 'args' => argsHelper::entityArgsHelper('Task'),
                 'resolve' => function ($value, array $args, ResolveInfo $info) {
                     if (!empty($value['tasks'])) {
                         $args['ids']=$value['tasks'];
                         return TasksListType::resolve($value, $args, $info);
                     } else {
                         return null;
                     }
                  },
          ]);
    }
    private function retrieveContact($id, $info=null)
    {
        global $sugar_config, $current_user;
        $contactBean = BeanFactory::getBean('Contacts');
        $contact = $contactBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
            // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($queryFields,1), FILE_APPEND);
        }
        $module_arr = array();
        if ($contact->id && $contact->ACLAccess('view')) {
            $all_fields = $contact->column_fields;
            foreach ($all_fields as $field) {
                if (isset($contact->$field) && !is_object($contact->$field)) {
                    $contact->$field = from_html($contact->$field);
                    $contact->$field = preg_replace("/\r\n/", '<BR>', $contact->$field);
                    $contact->$field = preg_replace("/\n/", '<BR>', $contact->$field);
                    $module_arr[$field] = $contact->$field;
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
            if(isset($queryFields) && array_key_exists('calls',$queryFields)){
                foreach ($contact->get_linked_beans('calls') as $call) {
                    $module_arr['calls'][] = $call->id;
                }
            }
            if(isset($queryFields) && array_key_exists('tasks',$queryFields)){
                foreach ($contact->get_linked_beans('tasks') as $task) {
                    $module_arr['tasks'][] = $task->id;
                }
            }

            if(isset($queryFields) && array_key_exists('accounts',$queryFields)){
                foreach ($contact->get_linked_beans('accounts') as $account) {
                    $module_arr['accounts'][] = $account->id;
                }
            }
            if(isset($queryFields) && array_key_exists('campaigns',$queryFields)){
                foreach ($contact->get_linked_beans('campaigns') as $campaign) {
                    $module_arr['campaigns'][] = $campaign->id;
                }
            }
            return $module_arr;
        } else {
            error_log(PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ".'error resolving ContactType');
            return;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if (isset($args['id']) && is_array($args['id'])) {
            // We received a list of contacts to return
            foreach ($args as $key => $contactId) {
                if (isset($contactId) && is_array($contactId)) {
                    foreach ($contactId as $key => $contactIdItem) {
                        $resultArray[] = self::retrieveContact($contactIdItem, $info);
                    }
                } elseif (!empty($contactId)) {
                    $resultArray[] = self::retrieveContact($contactId, $info);
                }
            }
            return $resultArray;
        } else {

            // We received a list of contacts to return
            if (!empty($args['id'])) {
                return self::retrieveContact($args['id'], $info);
            }
        }
    }

    public function getName()
    {
        return 'Contact';  // important to use the real name here, it will be used later in the Schema
    }
}
