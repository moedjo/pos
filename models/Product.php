<?php namespace Dojo\Pos\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use Sortable;

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
