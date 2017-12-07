<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('qalendar.core_path',null,$modx->getOption('core_path').'components/qalendar/');
require_once $corePath.'model/qalendar/qalendar.class.php';
$modx->qalendar = new Qalendar($modx);

$modx->lexicon->load('qalendar:default');

/* handle request */
$path = $modx->getOption('processorsPath', $modx->qalendar->config, $corePath.'processors/');
$modx->request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);
