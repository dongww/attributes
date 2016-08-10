<?php
/** @var  $conn */
$conn = require __DIR__ . '/../bin/update-schema.php';

$oldSchema = $conn->getSchemaManager();

$newSchema = new \Doctrine\DBAL\Schema\Schema();

$table = $newSchema->createTable("my_table");
$table->addColumn('id', 'integer', ['autoincrement' => true]);

$sql = $oldSchema->getMigrateToSql(
    $newSchema,
    $conn->getDatabasePlatform()
);