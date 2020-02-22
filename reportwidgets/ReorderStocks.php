<?php
namespace Dojo\Pos\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Dojo\Pos\Models\Product;

class ReorderStocks extends ReportWidgetBase
{
    public function render()
    {

        trace_sql();

        $this->vars['products'] = Product::whereRaw('quantity <= reorder_level')->lists('name', 'quantity');;
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
