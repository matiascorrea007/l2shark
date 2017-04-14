<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Augmentation
 */
class Augmentation extends Model
{
    protected $table = 'augmentations';

    protected $primaryKey = 'item_id';

	public $timestamps = false;

    protected $fillable = [
        'attributes',
        'skill',
        'level'
    ];

    protected $guarded = [];

        
}