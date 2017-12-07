<?php
/**
 * @author https://quasi-art.ru
 * 2017
 */
error_reporting(-1);
ini_set('error_reporting', E_ALL);
require_once MODX_CORE_PATH . 'model/modx/modrequest.class.php';

class qalendarControllerRequest extends modRequest {
    function __construct(&$modx) {
        parent :: __construct($modx);
    }

    public function handleRequest() {
        $this->loadErrorHandler();

        $modx =& $this->modx;

    		$modx->regClientCSS('/assets/components/qalendar/css/mgr/qalendar.css');
    		$modx->regClientStartupScript('/assets/components/qalendar/js/mgr/qalendar.js');

    		$output = '<div>Qalendar</div>';
    		return $output;
    }
}
