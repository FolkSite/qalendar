<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);
/**
 * @package qalendar
 * @subpackage controllers
 */
require_once dirname(dirname(__FILE__)).'/model/qalendar/qalendar.class.php';
$qalendar = new Qalendar($modx);
return $qalendar->initialize('mgr');
