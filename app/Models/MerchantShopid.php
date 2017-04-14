<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantShopid
 */
class MerchantShopid extends Model
{
    protected $table = 'merchant_shopids';

    protected $primaryKey = 'shop_id';

	public $timestamps = false;

    protected $fillable = [
        'npc_id'
    ];

    protected $guarded = [];

        
}