<?php

use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
use Youshido\GraphQL\Type\TypeMap ;
use Youshido\GraphQL\Execution\ResolveInfo;

require_once 'argsHelper.php';
require_once 'crmHelper.php';

class SuiteCRMSchema extends AbstractSchema
{
    public function build(SchemaConfig $config)
    {
        $config->getQuery()->addFields([
            'accounts'           => [
                'type' => new AccountsListType(),
                'args'    => argsHelper::entityArgsHelper('Accounts', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'account'           => [
                'type' => new AccountType(),
                'args'    => argsHelper::entityArgsHelper('Accounts', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'aos_quotes' => [
                'type' => new QuotesListType(),
                'args' => argsHelper::entityArgsHelper('AOS_Quotes', true),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                },
            ],
            'aos_quote' => [
                'type' => new QuoteType(),
                'args' => argsHelper::entityArgsHelper('AOS_Quotes', true),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                },
            ],
            'calls'           => [
                'type' => new CallsListType(),
                'args'    => argsHelper::entityArgsHelper('Calls', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'call'           => [
                'type' => new CallType(),
                'args'    => argsHelper::entityArgsHelper('Calls', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'campaigns'           => [
                'type' => new CampaignsListType(),
                'args'    => argsHelper::entityArgsHelper('Campaigns', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'campaign'           => [
                'type' => new CampaignType(),
                'args'    => argsHelper::entityArgsHelper('Campaign', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'cases'           => [
                'type' => new CasesListType(),
                'args'    => argsHelper::entityArgsHelper('Case', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'case'           => [
                'type' => new CaseType(),
                'args'    => argsHelper::entityArgsHelper('Case', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'contacts'           => [
                'type' => new ContactsListType(),
                'args'    => argsHelper::entityArgsHelper('Contact', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }

            ],
            'contact'           => [
                'type' => new ContactType(),
                'args'    => argsHelper::entityArgsHelper('Contact', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }

            ],
            'notes'           => [
                'type' => new NotesListType(),
                'args'    => argsHelper::entityArgsHelper('Note', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }

            ],
            'note'           => [
                'type' => new NoteType(),
                'args'    => argsHelper::entityArgsHelper('Note', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }

            ],
            'meetings'           => [
                'type' => new MeetingsListType(),
                'args'    => argsHelper::entityArgsHelper('Meeting', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'meeting'           => [
                'type' => new MeetingType(),
                'args'    => argsHelper::entityArgsHelper('Meeting', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }

            ],
            'opportunities'           => [
                'type' => new OpportunitiesListType(),
                'args'    => argsHelper::entityArgsHelper('Opportunity', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'opportunity'           => [
                'type' => new OpportunityType(),
                'args'    => argsHelper::entityArgsHelper('Opportunity', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }

            ],
            'tasks'           => [
                'type' => new TasksListType(),
                'args'    => argsHelper::entityArgsHelper('Task', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'task'           => [
                'type' => new TaskType(),
                'args'    => argsHelper::entityArgsHelper('Task', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'roles'         => [
                'type' => new AclRoleType(),
                'args' => argsHelper::entityArgsHelper('ACLRole', true),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                },
            ],
            'role' => [
                'type' => new AclRoleType(),
                'args' => argsHelper::entityArgsHelper('ACLRole', true),
                'resolve' => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                },
            ],
            'user'           => [
                'type' => new UserType(),
                'args'    => argsHelper::entityArgsHelper('User', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'users'           => [
                'type' => new UsersListType(),
                'args'    => argsHelper::entityArgsHelper('User', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
            'whoami'           => [
                'type' => new UserType(),
                'args'    => argsHelper::entityArgsHelper('User', true),
                'resolve'    => function ($value, array $args, ResolveInfo $info) {
                    $args['whoami']="1";
                    return $info->getReturnType()->resolve($value, $args, $info);
                }
            ],
        ]);
        $config->getMutation()->addFields([
            'createAccount' => [
                'type' => new AccountInputType(),
                'args'    => array_merge(argsHelper::entityArgsHelper('Account', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                'resolve' => function ($value, $args, $type) {
                    $result=AccountInputType::resolve($value, $args, $type);
                    return AccountType::resolve($value, ['id'=>$result['id']], $type);
                },
            ],
             'createCall' => [
                 'type' => new CallInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Call', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                    $result=CallInputType::resolve($value, $args, $type);
                    return CallType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createCase' => [
                 'type' => new CaseInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Case', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                    $result=CaseInputType::resolve($value, $args, $type);
                    return CaseType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createCaseupdate' => [
                 'type' => new CaseupdatesInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('AOP_Case_Updates', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                    $result=CaseupdatesInputType::resolve($value, $args, $type);
                    return CaseupdatesType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createContact' => [
                 'type' => new ContactInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Contact', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                     $result=ContactInputType::resolve($value, $args, $type);
                        return ContactType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createMeeting' => [
                 'type' => new MeetingInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Meeting', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                     $result=MeetingInputType::resolve($value, $args, $type);
                     return MeetingType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createOpportunity' => [
                 'type' => new OpportunityInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Opportunity', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                     $result=OpportunityInputType::resolve($value, $args, $type);
                        return OpportunityType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createTask' => [
                 'type' => new TaskInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Task', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                     $result=TaskInputType::resolve($value, $args, $type);
                        return TaskType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
             'createNote' => [
                 'type' => new NoteInputType(),
                 'args'    => array_merge(argsHelper::entityArgsHelper('Note', true),['related_beans' => new ListType(new RelatedBeanInputType())]),
                 'resolve' => function ($value, $args, $type) {
                     $result=NoteInputType::resolve($value, $args, $type);
                        return NoteType::resolve($value, ['id'=>$result['id']], $type);
                 },
             ],
        ]);
    }
}
