<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomMerchantBuylist
 */
class CustomMerchantBuylist extends Model
{
    protected $table = 'custom_merchant_buylists';

    public $timestamps = false;

    protected $fillable = [
        'item_id',
        'price',
        'shop_id',
        'order',
        'count',
        'currentCount',
        'time',
        'savetimer'
    ];

    protected $guarded = [];

        
}