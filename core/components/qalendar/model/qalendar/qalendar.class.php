<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);
/**
 * @package qalendar
 */
class Qalendar {
    /**
     * Constructs the Qalendar object
     *
     * @param modX &$modx A reference to the modX object
     * @param array $config An array of configuration options
     */
    function __construct(modX &$modx,array $config = []) {
        $this->modx =& $modx;

        $basePath = $this->modx->getOption('qalendar.core_path',$config,$this->modx->getOption('core_path').'components/qalendar/');
        $assetsUrl = $this->modx->getOption('qalendar.assets_url',$config,$this->modx->getOption('assets_url').'components/qalendar/');
        $this->config = array_merge([
            'basePath' => $basePath,
            'corePath' => $basePath,
            'modelPath' => $basePath.'model/',
            'processorsPath' => $basePath.'processors/',
            'chunksPath' => $basePath.'elements/chunks/',
            'jsUrl' => $assetsUrl.'js/',
            'cssUrl' => $assetsUrl.'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl.'connector.php',
        ], $config);

        $this->modx->addPackage('qalendar', $this->config['modelPath']);
    }

    /**
     * Initializes the class into the proper context
     *
     * @access public
     * @param string $ctx
     */
    public function initialize($ctx = 'web') {
        switch ($ctx) {
            case 'mgr':
                if (!$this->modx->loadClass('qalendarControllerRequest', $this->config['modelPath'].'qalendar/request/', true, true)) {
                    return 'Could not load controller request handler.';
                }
                $this->request = new qalendarControllerRequest($this->modx);
                return $this->request->handleRequest();
                break;
        }
        return true;
    }



}
