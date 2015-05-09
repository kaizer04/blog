<?php

define('DX_ROOT_DIR', dirname(__FILE__) . '/');
define('DX_ROOT_PATH', basename(dirname(__FILE__)) . '/');

$request = $_SERVER['REQUEST_URI'];
$request_home = '/' . DX_ROOT_PATH;
//var_dump($request);

$controller = 'master';
$method = 'index';
//$admin_routing = false;
$param = array();

include_once 'controllers/master.php';

if ( ! empty( $request ) ) {
    if ( 0 === strpos($request, $request_home)){
        $request = substr($request, strlen($request_home));

//        if(0 === strpos($request, 'admin/')) {
//            $admin_routing = true;
//            include_once 'controllers/admin/master.php';
//            $request = substr($request, strlen('admin/'));
//        }
        //var_dump($request); die();

        $components = explode('/', $request, 3);

        if (1 < count($components)){
            list($controller, $method) = $components;

            if(isset($components[2])){
                $param = $components[2];
            }
//
//            $admin_folder = $admin_routing ? 'admin/' : '';
//
            include_once 'controllers/' . $controller . '.php';
        }
    }
}

//var_dump($controller);
//var_dump($method);
//var_dump($param);

$controller_class = '\Controllers\\' . ucfirst($controller) . '_Controller';

$instance = new $controller_class();

if (method_exists($instance, $method)) {
    call_user_func_array(array($instance, $method), array($param));
}