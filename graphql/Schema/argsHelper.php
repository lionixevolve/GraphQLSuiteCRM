<?php

require_once __DIR__ .'/../../vendor/autoload.php';

use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\TypeMap;
use Doctrine\DBAL\Types\Type as DoctrineType;

//
class argsHelper
{
    public function doctrineToGraphqlTypeMapper($type)
    {
        switch ($type) {
            case DoctrineType::TARRAY:
            case DoctrineType::JSON_ARRAY:
                return new StringType();
            case DoctrineType::BOOLEAN:
                return new StringType();
            case DoctrineType::DATETIME:
            case DoctrineType::DATETIMETZ:
            case 'vardatetime':
            case DoctrineType::DATE:
            case DoctrineType::TIME:
                return new StringType();
            case DoctrineType::DECIMAL:
            case DoctrineType::FLOAT:
                // return new IntType();
                // TODO - Fix SuiteCRM Integers/Decimals returning as Strings from bean
                return new StringType();
            case DoctrineType::INTEGER:
            case DoctrineType::BIGINT:
            case DoctrineType::SMALLINT:
                // return new IntType();
                // TODO - Fix SuiteCRM Integers/Decimals returning as Strings from bean
                return new StringType();
            case DoctrineType::STRING:
                return new StringType();
            case DoctrineType::TEXT:
                return new StringType();
            default:
                return new StringType();
        }
    }
    public function entityArgsHelper($entity)
    {
        $entityNamespaced = 'Entities\\'.$entity;
        $entityNamespacedCstm = 'Entities\\'.$entity.'Cstm';
        $cstmExists = file_exists('./graphql/Entities/'.$entity.'Cstm.php');
        $paths = array(
            './graphql/Mappings/',
        );
        $config = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration($paths, true);
        $dbParams = array(
            'driver' => 'pdo_mysql',
            'user' => $GLOBALS['sugar_config']['dbconfig']['db_user_name'],
            'password' => $GLOBALS['sugar_config']['dbconfig'][ 'db_password'],
            'dbname' => $GLOBALS['sugar_config']['dbconfig'][ 'db_name'],
        );

        $em = \Doctrine\ORM\EntityManager::create($dbParams, $config);
        require_once './graphql/Entities/'.$entity.'.php';
        if ($cstmExists) {
            require_once './graphql/Entities/'.$entity.'Cstm.php';
        }

        $em->getRepository($entityNamespaced);

        $entityFields = $em->getClassMetadata($entityNamespaced)->getColumnNames();
        if ($cstmExists) {
            $entityFieldsCstm = $em->getClassMetadata($entityNamespacedCstm)->getColumnNames();
        }
        $argsArray = [];
        $fieldType = '';
        foreach ($entityFields as $key => $fieldName) {
            $fieldType = $em->getClassMetadata($entityNamespaced)->getTypeOfColumn($fieldName);
            $argsArray = array_merge($argsArray, [$fieldName => self::doctrineToGraphqlTypeMapper($fieldType)]);
            if($fieldType==DoctrineType::DATE || $fieldType==DoctrineType::DATETIME){
                //If the field type is a date/datetime we add 2 more fields so we can search on that field using range
                $fieldNameStartRange="start_range_".$fieldName;
                $fieldNameEndRange="end_range_".$fieldName;
                $argsArray = array_merge($argsArray, [$fieldNameStartRange =>self::doctrineToGraphqlTypeMapper($fieldType)]);
                $argsArray = array_merge($argsArray, [$fieldNameEndRange =>self::doctrineToGraphqlTypeMapper($fieldType)]);
            }
        }
        if ($cstmExists) {
            foreach ($entityFieldsCstm as $key => $fieldName) {
                $fieldType = $em->getClassMetadata($entityNamespacedCstm)->getTypeOfColumn($fieldName);
                $argsArray = array_merge($argsArray, [$fieldName => self::doctrineToGraphqlTypeMapper($fieldType)]);
                if($fieldType==DoctrineType::DATE || $fieldType==DoctrineType::DATETIME){
                    //If the field type is a date/datetime we add 2 more fields so we can search on that field using range
                    $fieldNameStartRange="start_range_".$fieldName;
                    $fieldNameEndRange="end_range_".$fieldName;
                    $argsArray = array_merge($argsArray, [$fieldNameStartRange =>self::doctrineToGraphqlTypeMapper($fieldType)]);
                    $argsArray = array_merge($argsArray, [$fieldNameEndRange =>self::doctrineToGraphqlTypeMapper($fieldType)]);
                }
            }
        }
        $argsArray = array_merge($argsArray, [
                'offset' => new StringType(TypeMap::TYPE_INT),
                'limit' => new StringType(TypeMap::TYPE_INT),
            ]);
            //Some modules have more fields due to relations or special fields
        if ($entity == 'Contacts' || $entity == 'Accounts' || $entity == 'Prospects' || $entity == 'Leads') {
            $argsArray = array_merge($argsArray, [
                'email1' => new StringType(TypeMap::TYPE_STRING),
                'ids' => new ListType(new StringType(TypeMap::TYPE_STRING)),
            ]);
        }
        if ($entity == 'Opportunities' ) {
            $argsArray = array_merge($argsArray, [
                'account_id' => new StringType(TypeMap::TYPE_STRING),
            ]);
        }
        if ($entity == 'Calls' || $entity == 'Cases' || $entity == 'Notes' || $entity == 'Accounts' || $entity == 'Contacts' || $entity == 'Leads' || $entity == 'Opportunities' || $entity == 'Meetings' || $entity == 'Tasks') {
            $argsArray = array_merge($argsArray, [
                'related_bean' => new StringType(TypeMap::TYPE_STRING),
                'related_beans' => new ListType(new RelatedBeanInputType()),
                'related_id' => new StringType(TypeMap::TYPE_STRING),
            ]);
        }
        return $argsArray;
    }
}
