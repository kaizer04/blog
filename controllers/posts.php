<?php

namespace Controllers;

class Posts_Controller {
    public  function  __construct() {
        echo "POST<br />";
    }

    public function index() {
        echo "Posts` index";

        include_once DX_ROOT_DIR . '/views/posts/index.php';
    }

    public function date() {
        include_once DX_ROOT_DIR . '/views/posts/date.php';
    }

    public function tag() {
       include_once DX_ROOT_DIR . '/views/posts/tag.php';
    }
}