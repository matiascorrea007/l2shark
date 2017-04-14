<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EngravedLog
 */
class EngravedLog extends Model
{
    protected $table = 'engraved_log';

    public $timestamps = false;

    protected $fillable = [
        'object_id',
        'actiondate',
        'process',
        'itemName',
        'form_char',
        'to_char'
    ];

    protected $guarded = [];

        
}