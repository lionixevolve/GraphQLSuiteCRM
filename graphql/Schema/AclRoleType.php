<?php

use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\IdType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;
use Youshido\GraphQL\Type\Scalar\DateType;
use Youshido\GraphQL\Type\ListType\ListType;

require_once 'argsHelper.php';

class AclRoleType extends AbstractObjectType   // extending abstract Object type
{

    public function build($config)  // implementing an abstract function where you build your type
    {
        //  error_log(__METHOD__.__LINE__.print_r($config,1));
        foreach ( argsHelper::entityArgsHelper('AclRoles') as $field => $type){
            $config->addField($field, $type);
        }
        // $config->addField('email1', new StringType());
        // $config->addField('roles', new StringType());
    }
    private function retrieveAclRole($id, $info){
        global $sugar_config, $current_user, $beanList;
        $roleBean = BeanFactory::getBean('ACLRoles');
        $role = $roleBean->retrieve($id);
        if($info!=null){
            $getFieldASTList=$info->getFieldASTList();
            $queryFields=[];
            foreach ($getFieldASTList as $key => $value) {
                $queryFields[$value->getName()]="";
            }
        }
        $module_arr = array();
        if ($role->id && $role->ACLAccess('view')) {
            $all_fields = $role->column_fields;
            foreach ($all_fields as $field) {
                if (isset($role->$field) && !is_object($role->$field)) {
                    $role->$field = from_html($role->$field);
                    $role->$field = preg_replace("/\r\n/", "<BR>", $role->$field);
                    $role->$field = preg_replace("/\n/", "<BR>", $role->$field);
                    $module_arr[$field] = $role->$field;
                }
            }
            // $roles = ACLRole::getAclRoleRoleNames($id);
            // if(!empty($roles)){
            //     //LX: TODO - create a RoleType to correctly return data
            //     foreach ($roles as $key => $value) {
            //         $module_arr['roles']=$value;
            //     }
            // }else{
            //     $module_arr['roles']="";
            // }

            return $module_arr;

        }else{
            error_log("error resolving AclRoleType");
            return null;
        }
    }

    public function resolve($value = null, $args = [], $info = null)  // implementing resolve function
    {
        if (isset($args['id']) && is_array($args['id'])) {
            foreach ($args as $key => $roleId) {
                if (isset($roleId) && is_array($roleId)) {
                    foreach ($roleId as $key => $roleIdItem) {
                        $resultArray[] = self::retrieveAclRole($roleIdItem,$info);
                        // file_put_contents($_SERVER['DOCUMENT_ROOT'].'/lx.log', PHP_EOL .PHP_EOL.__FILE__ .":". __LINE__." -- ". print_r($resultArray,1), FILE_APPEND);
                    }
                } elseif (!empty($roleId)) {
                    $resultArray[] = self::retrieveAclRole($callId,$info);
                }
            }
            return $resultArray;
        } elseif (!empty($args['id'])) {
            return self::retrieveAclRole($args['id'],$info);
        }
    }


    public function getName()
    {
        return "AclRole";  // important to use the real name here, it will be used later in the Schema
    }

}
