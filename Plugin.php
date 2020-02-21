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
            'Dojo\Pos\ReportWidgets\TrafficSources' => [
                'label' => 'bangke',
                'context' => 'dashboard',
                'permissions' => [
                ],
            ],
        ];
    }
}
