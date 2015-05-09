<?php

namespace Models;

class Master_Model {
    protected $table;
    protected $limit;

    public function __construct($args = array()) {
        $args = array(
            'limit' => 0
        );

        if (!isset($args['table'])) {
            die('Table not defined');
        }
    }
}