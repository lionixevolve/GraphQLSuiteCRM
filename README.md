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

All this repo files should reside in the root folder of SuiteCRM. So the rest.php file should live along side Suitecrm index.php file.
