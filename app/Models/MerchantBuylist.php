<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantBuylist
 */
class MerchantBuylist extends Model
{
    protected $table = 'merchant_buylists';

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