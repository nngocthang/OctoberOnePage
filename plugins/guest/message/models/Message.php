<?php namespace Guest\Message\Models;

use Model;

/**
 * Model
 */
class Message extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'guest_message_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
