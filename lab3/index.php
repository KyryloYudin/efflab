<?php

require_once 'PostgreSQLQueryBuilder.php';
require_once 'MySQLQueryBuilder.php';
require_once 'QueryDirector.php';

$postgresqlBuilder = new PostgreSQLQueryBuilder();
$director = new QueryDirector($postgresqlBuilder);
$query = $director->buildQuery('id, name', 'age > 18', 10);
echo "PostgreSQL Запит: $query\n";  // SELECT id, name WHERE age > 18 LIMIT 10

$mysqlBuilder = new MySQLQueryBuilder();
$director = new QueryDirector($mysqlBuilder);
$query = $director->buildQuery('id, name', 'age > 18', 10);
echo "MySQL Запит: $query\n";  // SELECT id, name WHERE age > 18 LIMIT 10
