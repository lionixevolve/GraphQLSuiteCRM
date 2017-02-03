<?php
require_once 'bootstrap.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap

// replace with mechanism to retrieve EntityManager in your app
$connectionParams = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'root',
    'password' => '',
    'dbname' => '',
    'charset' => 'utf8',
);
$config = new \Doctrine\ORM\Configuration();
// $driver = $config->newDefaultAnnotationDriver(__DIR__ . '/Entities')
$driver = new \Doctrine\ORM\Mapping\Driver\YamlDriver(array('graphql/Mappings'));
$config->setMetadataDriverImpl($driver);
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
$config->setFilterSchemaAssetsExpression("~^(?!(config|address_book|custom_fields|email_cache|users_feeds))~");

// $entityManager->getConnection()->getConfiguration()->setFilterSchemaAssetsExpression("~^(?!Table1)~");

$entityManager = \Doctrine\ORM\EntityManager::create($connectionParams, $config);


return ConsoleRunner::createHelperSet($entityManager);
