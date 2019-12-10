<?php namespace Waka\Crsm\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Contacts Back-end Controller
 */
class Contacts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
                
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
                /**
    * @var string Body CSS class to add to the layout.
    */
    public $bodyClass = 'compact-container';
    
        public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Waka.Crsm', 'crsm', 'contacts');
    }
}
