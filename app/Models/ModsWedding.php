<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModsWedding
 */
class ModsWedding extends Model
{
    protected $table = 'mods_wedding';

    public $timestamps = false;

    protected $fillable = [
        'player1Id',
        'player2Id',
        'married',
        'affianceDate',
        'weddingDate',
        'coupleType'
    ];

    protected $guarded = [];

        
}