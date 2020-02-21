<?php namespace Dojo\Pos\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class InventoryDataTrackings extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'access_inventory_data_trackings' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pos', 'products-menu-item', 'inventory-data-trackings-menu-item');
    }
}
