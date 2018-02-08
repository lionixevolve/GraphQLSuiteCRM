# GraphQLSuiteCRM
## What it does
This package allows to use GraphQL with SuiteCRM /SugarCRM (6.5) instead of the Rest API which is not truly REST.

The rest.php file is the REST endpoint. This file is a slim framework endpoint acting as a middleware.

You can customize rest.php file to further add functions, the main one:
`rest.php/graphql  `

Its for sending graphql queries and mutations.

There are more undocumented functions in the endpoint, like getting dropdown values.TODO: Document this

Once you send a query to rest.php/graphql it uses a PHP SuiteCRM Graphql schema based on  Youshido/GraphQL library to process your query.

This GraphQL library uses SuiteCRM/SugarCRM beans for almost all the actions, so every logic hook, workflow, should work as planned.

## Set up

`composer require lionixevolve/graphqlsuitecrm`

This will install the plugin in the vendor folder.

## Testing and Usage
Use the included GraphiQL to try this
```
{
  accounts(limit:2) {
    name
  }
}

```
it will get you the accounts module with the name of each one. Limited to 2. You can also use the `offset:2` to paginate.


An advance example - retrieving all the cases by status.
Also you can see some schema changes for the assigned_user/created_by users field that let you retrieve further information about the user.

```

 query cases( $status: String, $limit: String, $offset: String){
                                            cases( status: $status, offset:$offset, limit: $limit, order:"case_number" ){
                                                id
                                                case_number
                                                date_entered
                                                description
                                                status
                                                assigned_user_details{
                                                    id
                                                    first_name
                                                    last_name
                                                    user_name
                                                }
                                                created_user_details {
                                                    id
                                                    first_name
                                                    last_name
                                                    user_name
                                                }
                                                accounts {
                                                    name
                                                    id
                                                    contacts{
                                                        id
                                                    }
                                                }
                                            }
                                        }
```

As you can see related modules are also retrieved using the plural word of the relation. Accounts/Opportunities, etc.


### Extending/Customizing Suitecrm Graphql Schema  (Rudimentary/Hacky)
If you need to extend the custom schema you can create a file `graphql/CustomSuiteCRMSchema.php` and it will be included_once when defining the Schema. This is an example taken from a real project

```
<?php
require_once('Schema/TopicType.php');
require_once('Schema/TopicsListType.php');


class CustomSuiteCRMSchema
{
    public function buildSchema($config)
    {
        $config->getQuery()->addFields([
            'topics' => [
                'type' => new TopicsListType(),
                'args' => argsHelper::entityArgsHelper('lx_topics'),
                'resolve' => function ($value, array $args, Youshido\GraphQL\Execution\ResolveInfo  $info) {
                    return $info->getReturnType()->resolve($value, $args, $info);
                },
            ],
        ]);
    }
    public function buildUserResolve($user, $queryFields){
        $module_arr=array();
        if(isset($queryFields) && array_key_exists('topics',$queryFields)){
                foreach ($user->get_linked_beans('lx_topics_users', 'lx_topics') as $topic) {
                    $module_arr['topics'][] = $topic->id;
                }
        }
        return $module_arr;
    }
    public function buildUserType($config)
    {
        $config->addField('topics', [
            'type' => new TopicsListType(),
            'args' => argsHelper::entityArgsHelper('lx_topics'),
            'resolve' => function ($value, array $args, Youshido\GraphQL\Execution\ResolveInfo $info) {
                 if (!empty($value['topics'])) {
                     $args['id']=$value['topics'];                     
                     return TopicType::resolve($value, $args, $info);
                 } else {
                     return null;
                 }
            },
        ]);
    }

}

```
For the example you will also need the Type definition (in this case TopicType/TopicsListType) to resolve the data.

Beware this is an include_once call so all the code here will be included when the RoothSchema (SuiteCRMSchema.php file) is executed
#### Customizing the Rest endpoint

* You can extend the rest (made with Slim) requests when the file `graphql/CustomRest.php` exists on your root suitecrm/lionixcrm folder

```
$app->post('/newPost', function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response){
return $response->withJson(["result"=>"empty - not even tried"]);
}
```
#### CORS
If you need support for CORS you may use the graphql/CustomRest.php and include the following snippet
```

$app->add(new \Eko3alpha\Slim\Middleware\CorsMiddleware([
    'http://www.example.com' => ['GET', 'POST','PUT', 'DELETE','OPTIONS'],
    'https://www.example2.com' => ['GET', 'POST'],
]));

```
The CORS middleware will take care of allowing the specified hosts to access the API and return valid headers.

### GraphiQL
You can use the included GraphiQL here:
`vendor/lionixevolve/graphqlsuitecrm/graphql/GraphiQL/`

### Known Issues
there is currently an issue with the schema inspector Issue#2
