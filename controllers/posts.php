<?php

namespace Controllers;

class Posts_Controller extends Master_Controller {
    public  function  __construct() {
//        echo "POST<br />";
        parent::__construct(get_class(),
            'post', '/views/posts/');
    }

    public function index() {
//        echo "Posts` index";
//        include_once DX_ROOT_DIR . '/views/posts/index.php';
//        var_dump($this->model); die();
        $posts = $this->model->get_all();
        //$posts = $this->model->get(2);
        //var_dump($posts); die();
        $template_name = DX_ROOT_DIR . $this->views_dir . 'index.php';
        include_once $this->layout;
    }

    public function view($id) {
        $posts = $this->model->get($id);
        var_dump($posts); die();

        $template_name = DX_ROOT_DIR . $this->views_dir . 'index.php';

        include_once $this->layout;
    }

    public function date() {
        $template_name = DX_ROOT_DIR . $this->views_dir . 'date.php';
        include_once $this->layout;
    }

    public function tag() {
        $template_name = DX_ROOT_DIR . $this->views_dir . 'tag.php';
        include_once $this->layout;
    }
}