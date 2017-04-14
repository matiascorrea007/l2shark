<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EngravedItem
 */
class EngravedItem extends Model
{
    protected $table = 'engraved_items';

    public $timestamps = false;

    protected $fillable = [
        'object_id',
        'item_id',
        'engraver_id'
    ];

    protected $guarded = [];

        
}