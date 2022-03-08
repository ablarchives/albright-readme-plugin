<?php namespace Albrightlabs\ReadMe\Controllers;

use Config;
use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
/**
 * About Backend Controller
 */
class About extends Controller
{
    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Albrightlabs.ReadMe', 'readme');
    }

    /**
     * Index controller action
     */
    public function index()
    {

        $this->pageTitle = 'About & Docs';

        if($index = file_get_contents(__DIR__ . '/../config/index.htm')){
            $this->vars['index'] = $index;
        }
        else{
            $this->vars['index'] = '';
        }
    }
}
