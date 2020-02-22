<?php namespace Dojo\Pos\Models;

use Model;

/**
 * Model
 */
class ProductCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pos_product_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|between:3,100|unique:dojo_pos_product_categories,name',
    ];

    use \October\Rain\Database\Traits\Sortable;

    public function getProductCategoryOptions($scopes = null)
    {
        return ProductCategory::lists('name', 'id');
    }
}
