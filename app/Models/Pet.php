<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pet
 */
class Pet extends Model
{
    protected $table = 'pets';

    protected $primaryKey = 'item_obj_id';

	public $timestamps = false;

    protected $fillable = [
        'name',
        'level',
        'curHp',
        'curMp',
        'exp',
        'sp',
        'karma',
        'pkkills',
        'fed'
    ];

    protected $guarded = [];

        
}