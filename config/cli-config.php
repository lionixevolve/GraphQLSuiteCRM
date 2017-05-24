<?php
require_once 'config.php';
$sugar_config['lx_dbcrmserver'] = 'localhost';
require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
// replace with mechanism to retrieve EntityManager in your app
$connectionParams = array(
    'driver' => 'pdo_mysql',
    'host' => $sugar_config['dbconfig']['db_host_name'] ,
    'port' => '3306',
    'user' => $sugar_config['dbconfig']['db_user_name'] ,
    'password' => $sugar_config['dbconfig']['db_password'] ,
    'dbname' => $sugar_config['dbconfig']['db_name'] ,
    'charset' => 'utf8',
);
$config = new \Doctrine\ORM\Configuration();
// $driver = $config->newDefaultAnnotationDriver(__DIR__ . '/Entities')
$driver = new \Doctrine\ORM\Mapping\Driver\YamlDriver(array('graphql/Mappings'));
$config->setMetadataDriverImpl($driver);
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
$config->setFilterSchemaAssetsExpression("~^(?!(config|address_book|custom_fields|email_cache|users_feeds|.*_audit$))~");
// $entityManager->getConnection()->getConfiguration()->setFilterSchemaAssetsExpression("~^(?!Table1)~");

$entityManager = \Doctrine\ORM\EntityManager::create($connectionParams, $config);


return ConsoleRunner::createHelperSet($entityManager);
