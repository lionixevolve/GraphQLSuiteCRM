<?php
// namespace SuiteCRM\Schema;

use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\ListType\AbstractListType;
use Youshido\GraphQL\Type\TypeMap ;
use Youshido\GraphQL\Execution\ResolveInfo;

require_once 'CaseupdatesType.php';

if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}

class CaseupdatesListType extends AbstractListType
{
    public function getItemType()
    {
        return new CaseupdatesType();
    }

    public function build($config)
    {
        foreach (argsHelper::entityArgsHelper('AOP_Case_Updates', true) as $field => $type) {
            $config->addField($field, $type);
        }
    }
    public function resolve($value = null, $args = [], $info = null)
    {
        require_once 'ListHelper.php';
        $list=ListHelper('AOP_Case_Updates',$value  , $args , $info );
        $resultArray = [];

        if (is_array($list['list']) && !empty($list['list'])) {
            if ($list['list'][0]->ACLAccess('list')) {
                foreach ($list['list'] as $item) {
                    $resultArray[] = CaseupdatesType::resolve(null, ['id' => $item->id], $info);
                }
            } else {
                //no access
                error_log('no access');
            }
            return empty($resultArray)? null :$resultArray;
        } else {
            return null;
        }
    }
}
