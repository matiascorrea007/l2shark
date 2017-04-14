<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Merchant
 */
class Merchant extends Model
{
    protected $table = 'merchants';

    protected $primaryKey = 'npc_id';

	public $timestamps = false;

    protected $fillable = [
        'merchant_area_id'
    ];

    protected $guarded = [];

        
}