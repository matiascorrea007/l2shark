<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomMerchantShopid
 */
class CustomMerchantShopid extends Model
{
    protected $table = 'custom_merchant_shopids';

    protected $primaryKey = 'shop_id';

	public $timestamps = false;

    protected $fillable = [
        'npc_id'
    ];

    protected $guarded = [];

        
}