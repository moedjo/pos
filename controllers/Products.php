<?php namespace Dojo\Pos\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Products extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'access_products' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pos', 'products-menu-item');
    }
}
