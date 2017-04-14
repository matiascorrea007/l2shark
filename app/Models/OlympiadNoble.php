<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OlympiadNoble
 */
class OlympiadNoble extends Model
{
    protected $table = 'olympiad_nobles';

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