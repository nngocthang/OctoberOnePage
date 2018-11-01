<?php namespace Guest\Messagetous\Models;

use Model;

/**
 * Model
 */
class MessageToUs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'guest_messagetous_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
