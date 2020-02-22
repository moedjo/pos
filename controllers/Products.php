<?php namespace Dojo\Pos\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Products extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'access_products',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Pos', 'master-data-menu-item','product-menu-item');
    }

    public function create($context = null)
    {
        $this->bodyClass = 'compact-container';
        return $this->asExtension('FormController')->create($context);
    }

     public function update($recordId = null, $context = null)
    {
        $this->bodyClass = 'compact-container';
        return $this->asExtension('FormController')->update($recordId,$context);
    }

    public function listInjectRowClass($record, $definition = null)
    {
        if ($record->trashed()) {
            return 'nolink strike deleted';
        }
    }

    public function formExtendQuery($query)
    {
        // $query->withTrashed();
    }


}
