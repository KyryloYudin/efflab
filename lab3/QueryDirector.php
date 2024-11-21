<?php

require_once 'PostgreSQLQueryBuilder.php';
require_once 'MySQLQueryBuilder.php';

class QueryDirector {
    private $queryBuilder;

    public function __construct(QueryBuilder $queryBuilder) {
        $this->queryBuilder = $queryBuilder;
    }

    public function buildQuery($columns, $condition, $limit) {
        $this->queryBuilder->select($columns);
        $this->queryBuilder->where($condition);
        $this->queryBuilder->limit($limit);
        return $this->queryBuilder->getSQL();
    }
}
