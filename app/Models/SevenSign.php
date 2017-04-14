<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SevenSign
 */
class SevenSign extends Model
{
    protected $table = 'seven_signs';

    protected $primaryKey = 'char_obj_id';

	public $timestamps = false;

    protected $fillable = [
        'cabal',
        'seal',
        'red_stones',
        'green_stones',
        'blue_stones',
        'ancient_adena_amount',
        'contribution_score'
    ];

    protected $guarded = [];

        
}