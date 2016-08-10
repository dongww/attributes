<?php
$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'url' => 'sqlite:///../data/db.sqlite',
);
return \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);