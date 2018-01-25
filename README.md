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



### GraphiQL
You can use the included GraphiQL here:
`vendor/lionixevolve/graphqlsuitecrm/graphql/GraphiQL/`

### Known Issues
there is currently an issue with the schema inspector Issue#2 
