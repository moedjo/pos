<?php namespace Dojo\Pos\Models;

use Backend\Facades\BackendAuth;
use Model;

/**
 * Model
 */
class InventoryDataTracking extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pos_inventory_data_trackings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'product' => 'Dojo\Pos\Models\Product',
        'user' => 'Backend\Models\User',
    ];

    public function beforeSave()
    {

        $this->user = BackendAuth::getUser();
    }

    public function afterSave()
    {
        $product = Product::find($this->product->id);
        $product->quantity = $product->quantity + $this->in_out_quantity;
        $product->save();
    }
}
