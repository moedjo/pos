<?php
namespace Dojo\Pos\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

class TrafficSources extends ReportWidgetBase
{
    public function render()
    {
        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title' => 'Widget title',
                'default' => 'Top Pages',
                'type' => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'The Widget Title is required.',
            ],
            'days' => [
                'title' => 'Number of days to display data for',
                'default' => '7',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
        ];
    }
}
