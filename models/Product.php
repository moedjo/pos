<?php namespace Dojo\Pos\Models;

use Backend\Facades\BackendAuth;
use Model;

/**
 * Model
 */
class Product extends Model
{

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_pos_products';

    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|between:3,100|unique:dojo_pos_products,name',
        'quantity' => 'min:0',
    ];

    use \October\Rain\Database\Traits\Revisionable;

    /**
     * @var array Monitor these attributes for changes.
     */
    protected $revisionable = [
        'quantity',
        'reorder_level',
        'deleted_at',
    ];

    /**
     * @var array Relations
     */
    public $morphMany = [
        'revision_history' => ['System\Models\Revision', 'name' => 'revisionable'],
    ];

    public $belongsTo = [
        'product_category' => 'Dojo\Pos\Models\ProductCategory',
    ];

    public $attachMany = [
        'photos' => 'System\Models\File',
    ];

    /**
     * @var int Maximum number of revision records to keep.
     */
    public $revisionableLimit = 100;

    public function getRevisionableUser()
    {
        return BackendAuth::getUser()->id;
    }

    use \October\Rain\Database\Traits\Sortable;

}
