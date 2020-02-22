<?php namespace Dojo\Pos;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerReportWidgets()
    {
        return [
            'Dojo\Pos\ReportWidgets\ReorderStocks' => [
                'label' => 'dojo.pos::lang.stock.reorder_stock',
                'context' => 'dashboard',
                'permissions' => [

                ],
            ],
        ];
    }
}
