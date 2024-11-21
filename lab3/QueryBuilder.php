<?php

interface QueryBuilder {
    public function select($columns);
    public function where($condition);
    public function limit($limit);
    public function getSQL();
}
