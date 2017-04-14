<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OlympiadNoblesEom
 */
class OlympiadNoblesEom extends Model
{
    protected $table = 'olympiad_nobles_eom';

    protected $primaryKey = 'charId';

	public $timestamps = false;

    protected $fillable = [
        'class_id',
        'char_name',
        'olympiad_points',
        'competitions_done',
        'competitions_won',
        'competitions_lost',
        'competitions_drawn'
    ];

    protected $guarded = [];

        
}