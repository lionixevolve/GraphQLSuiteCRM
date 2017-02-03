# GraphQLSuiteCRM
## What it does
This package allows to use GraphQL with SuiteCRM /SugarCRM (6.5) instead of the Rest API which is not truly REST.

The rest.php file is the REST endpoint. This file is a slim framework endpoint acting as a middleware.
You can customize rest.php file to further add functions, the main one:
`rest.php/graphql  `
Its for sending graphql queries and mutations.

There are more undocumented functions in the endpoint, like getting dropdown values.TODO.

Once you send a query to rest.php/graphql it uses a PHP SuiteCRM Graphql schema based on  Youshido/GraphQL library to process your query.

This GraphQL library uses SuiteCRM/SugarCRM beans for almost all the actions, so every logic hook, workflow, should work as planned.

## Set up
All this files should exist in the root folder of the crm. TODO: Refacto as a suitecrm module.


First, we create our schema reading the database structure with Doctrine. What we do first is create a Schema using doctrine command line, querying the database and retrieving all tables and columns. This process should be done everytime the DB schema changes. (sorry nothing automatic yet)

Edit the file config/config.php and set up the correct user/password and database.
First time `composer install ` to get the dependencies
```
php vendor/bin/doctrine orm:convert:mapping --from-database yml graphql/Mappings  --namespace 'Entities\' --force
php vendor/bin/doctrine orm:generate-entities graphql/  
 ```
This is required to use automatic field recognition

## Whenever a Field is added/removed from the database (like going to SuiteCRM Studio and adding a field)
```
php vendor/bin/doctrine orm:convert:mapping --from-database yml graphql/Mappings  --namespace 'Entities\' --force
php vendor/bin/doctrine orm:generate-entities graphql/  
 ```
