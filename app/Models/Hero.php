<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hero
 */
class Hero extends Model
{
    protected $table = 'heroes';

    protected $primaryKey = 'charId';

	public $timestamps = false;

    protected $fillable = [
        'char_name',
        'class_id',
        'count',
        'played'
    ];

    protected $guarded = [];

        
}