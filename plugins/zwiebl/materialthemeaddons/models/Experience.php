<?php namespace Zwiebl\MaterialThemeAddons\Models;

use Model;

/**
 * Model
 */
class Experience extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    const SORT_ORDER = 'sort_order';
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => ['System\Models\File']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zwiebl_materialthemeaddons_experience';
}