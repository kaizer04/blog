<?php
echo 'Front controller!';

define('DX_ROOT_DIR', dirname(__FILE__).'/');
define('DX_ROOT_PATH', basename(dirname(__FILE__)).'/');

$request = $_SERVER['REQUEST_URI'];