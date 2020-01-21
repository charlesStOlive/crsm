<?php namespace Waka\Crsm\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Excel;
use Redirect;
use Session;
use \Waka\ImportExport\Models\ConfigImport;

/**
 * Contacts Back-end Controller
 */
class Contacts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Waka.Utils.Behaviors.DuplicateModel',
        'Waka.Utils.Behaviors.PopupActions',
        'Waka.Publisher.Behaviors.WordBehavior',
        'Waka.ImportExport.Behaviors.ExcelImport',
        'Waka.ImportExport.Behaviors.ExcelExport'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $duplicateConfig = 'config_duplicate.yaml'; 


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Waka.Crsm', 'crsm', 'contacts');
    }

    public function update($id) {
        $this->bodyClass = 'compact-container';
        return $this->asExtension('FormController')->update($id);
    }
}
