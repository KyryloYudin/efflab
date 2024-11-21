<?php

require_once 'QueryBuilder.php';

class PostgreSQLQueryBuilder implements QueryBuilder {
    private $query = '';

    public function select($columns) {
        $this->query .= "SELECT $columns ";
    }

    public function where($condition) {
        $this->query .= "WHERE $condition ";
    }

    public function limit($limit) {
        $this->query .= "LIMIT $limit ";
    }

    public function getSQL() {
        return rtrim($this->query);
    }
}
