<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantLease
 */
class MerchantLease extends Model
{
    protected $table = 'merchant_lease';

    public $timestamps = false;

    protected $fillable = [
        'merchant_id',
        'player_id',
        'bid',
        'type',
        'player_name'
    ];

    protected $guarded = [];

        
}