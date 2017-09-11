<?php
require_once __DIR__ .'/../../vendor/autoload.php';
use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\TypeMap;
use Doctrine\DBAL\Types\Type as DoctrineType;

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
    public function suitecrmToGraphqlTypeMapper($type)
    {
        switch ($type) {
            case 'datetime':
            case 'date':
            case 'char':
            case 'varchar':
            case 'tinyint':
            case 'bool':
            case 'double':
            case 'text':
            case 'int':
            case 'enum':
            case 'multienum':
            case 'relate':
            case 'currency':
                return new StringType();
            default:
                return new StringType();
        }
    }
    public function entityArgsHelper($entity, $mutation=false)
    {
        global $db, $dictionary, $beanList, $language;
        $argsArray = [];
        $default_language = $sugar_config['default_language'];
        if (empty($language)) {
            $language = $default_language;
        }
        if (!file_exists(sugar_cached('modules/').$entity.'/language/'.$language.'.lang.php')
                && !empty($GLOBALS['beanList'][$entity])) {
            $object = BeanFactory::getObjectName($entity);
            VardefManager::refreshVardefs($entity, $object);
        }
        if($entity=="Cases"){
        }
        if (!empty($beanList[$entity]) && $entity!="Cases") {
            $entity=$beanList[$entity];
        }elseif ($entity=="Cases") {
            //Case is a special scenario, Cases is the entity, but aCase is the class and Case seems to be in the dictionary 
            $entity="Case";
        }
        $moduleFields=$dictionary[$entity]['fields'];
        if (is_array($moduleFields)) {
            foreach ($moduleFields as $key => $value) {
                if ($moduleFields[$key]['type']!='link') {
                    $fieldType=$moduleFields[$key]['type'];
                    $argsArray = array_merge($argsArray, [$key => self::suitecrmToGraphqlTypeMapper($fieldType)]);
                    if ($mutation==false) {
                        //Mutation doesn't allow this types as they are cannot be used to insert new data
                        if ($fieldType=='date' || $fieldType=='datetime') {
                            //If the field type is a date/datetime we add 2 more fields so we can search on that field using range
                            $fieldNameStartRange="start_range_".$key;
                            $fieldNameEndRange="end_range_".$key;
                            $argsArray = array_merge($argsArray, [$fieldNameStartRange =>self::suitecrmToGraphqlTypeMapper($fieldType)]);
                            $argsArray = array_merge($argsArray, [$fieldNameEndRange =>self::suitecrmToGraphqlTypeMapper($fieldType)]);
                        }
                         elseif ($fieldType=='relate' && $moduleFields[$key]['module']=='Users') {
                            //Fields of type Related will be added a new _details FIELD to the graphql query
                            // Which will allow to reference the related Module allowing queries like
                            // For example, a related field named related_user_field_c, will have a
                            // related_user_field_c_details which in turn will be linked to the User modules
                            // So it will be possible to query related_user_field_c_details{ user_name}
                            $fieldNamePlusDetails=$key."_details";
                            $relatedFieldName=$moduleFields[$key]['id_name'];
                            $argsArray = array_merge($argsArray, [$fieldNamePlusDetails =>
                            [
                                'type' => new UserType(),
                                'args' => argsHelper::entityArgsHelper('Users', true),
                                'resolve' => function ($value, array $args, Youshido\GraphQL\Execution\ResolveInfo $info) use ($relatedFieldName) {
                                    if (!empty($relatedFieldName)) {
                                        $args['id']=$value[$relatedFieldName];
                                        return UserType::resolve($value, $args, $info);
                                    } else {
                                        return null;
                                    }
                                },
                            ]
                        ]);
                        }
                    elseif ($fieldType=='relate' && $moduleFields[$key]['module']=='Contacts') {
                        $fieldNamePlusDetails=$key."_details";
                        $relatedFieldName=$moduleFields[$key]['id_name'];
                        $argsArray = array_merge($argsArray, [$fieldNamePlusDetails =>
                        [
                            'type' => new ContactType(),
                            'args' => argsHelper::entityArgsHelper('Contacts', true),
                            'resolve' => function ($value, array $args, Youshido\GraphQL\Execution\ResolveInfo $info) use ($relatedFieldName) {
                                if (!empty($relatedFieldName)) {
                                    $args['id']=$value[$relatedFieldName];
                                    return ContactType::resolve($value, $args, $info);
                                } else {
                                    return null;
                                }
                            },
                        ]
                    ]);
                }elseif ($fieldType=='relate' && $moduleFields[$key]['module']=='Accounts') {
                    $fieldNamePlusDetails=$key."_details";
                    $relatedFieldName=$moduleFields[$key]['id_name'];
                    $argsArray = array_merge($argsArray, [$fieldNamePlusDetails =>
                    [
                        'type' => new AccountType(),
                        'args' => argsHelper::entityArgsHelper('Accounts', true),
                        'resolve' => function ($value, array $args, Youshido\GraphQL\Execution\ResolveInfo $info) use ($relatedFieldName) {
                            if (!empty($relatedFieldName)) {
                                $args['id']=$value[$relatedFieldName];
                                return AccountType::resolve($value, $args, $info);
                            } else {
                                return null;
                            }
                        },
                        ]
                        ]);
                    }elseif ($fieldType=='relate' && $moduleFields[$key]['module']=='Opportunities') {
                        $fieldNamePlusDetails=$key."_details";
                        $relatedFieldName=$moduleFields[$key]['id_name'];
                        $argsArray = array_merge($argsArray, [$fieldNamePlusDetails =>
                        [
                        'type' => new OpportunityType(),
                        'args' => argsHelper::entityArgsHelper('Opportunities', true),
                        'resolve' => function ($value, array $args, Youshido\GraphQL\Execution\ResolveInfo $info) use ($relatedFieldName) {
                            if (!empty($relatedFieldName)) {
                                $args['id']=$value[$relatedFieldName];
                                return OpportunityType::resolve($value, $args, $info);
                            } else {
                                return null;
                            }
                        },
                        ]
                        ]);
                    }
                    }
                }
            }
        }
        $argsArray = array_merge($argsArray, [
                'offset' => new StringType(TypeMap::TYPE_INT),
                'limit' => new StringType(TypeMap::TYPE_INT),
                'order' => new StringType(TypeMap::TYPE_STRING),
            ]);
            //Some modules have more fields due to relations or special fields
        if ($entity == 'Contact' || $entity == 'Account' || $entity == 'Prospect' || $entity == 'Lead') {
            $argsArray = array_merge($argsArray, [
                'email1' => new StringType(TypeMap::TYPE_STRING),
                'ids' => new ListType(new StringType(TypeMap::TYPE_STRING)),
            ]);
        }
        if ($entity == 'Opportunity') {
            $argsArray = array_merge($argsArray, [
                'account_id' => new StringType(TypeMap::TYPE_STRING),
            ]);
        }
        if ($entity == 'Call' || $entity == 'Case' || $entity == 'Note' || $entity == 'Account' || $entity == 'Contact' || $entity == 'Lead' || $entity == 'Opportunitiy' || $entity == 'Meeting' || $entity == 'Task') {
            $argsArray = array_merge($argsArray, [
                'related_bean' => new StringType(TypeMap::TYPE_STRING),
                'related_id' => new StringType(TypeMap::TYPE_STRING),
            ]);
        }

        return $argsArray;
    }
}
