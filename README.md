# GraphQLSuiteCRM
## Set up
First, we create our schema reading the database structure with Doctrine
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
