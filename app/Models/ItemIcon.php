<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemIcon
 */
class ItemIcon extends Model
{
    protected $table = 'item_icon';

    protected $primaryKey = 'item_id';

	public $timestamps = false;

    protected $fillable = [
        'filename'
    ];

    protected $guarded = [];

        
}