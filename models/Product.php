<?php namespace Dojo\Pos\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pos_products';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
