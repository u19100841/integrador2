<?php
require __DIR__.'/helper/Init.php';
require __DIR__.'/helper/Route.php';

$Routes = array();


define( 'BASEDIR', '/proyecto_tickets/' );

require_once( './router/router.php' );




$how = new Init();
$how->run();
