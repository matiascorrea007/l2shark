<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 */
class Game extends Model
{
    protected $table = 'games';

    public $timestamps = false;

    protected $fillable = [
        'idnr',
        'number1',
        'number2',
        'prize',
        'newprize',
        'prize1',
        'prize2',
        'prize3',
        'enddate',
        'finished'
    ];

    protected $guarded = [];

        
}