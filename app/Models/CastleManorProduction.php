<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CastleManorProduction
 */
class CastleManorProduction extends Model
{
    protected $table = 'castle_manor_production';

    public $timestamps = false;

    protected $fillable = [
        'castle_id',
        'seed_id',
        'can_produce',
        'start_produce',
        'seed_price',
        'period'
    ];

    protected $guarded = [];

        
}