<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Auction
 */
class Auction extends Model
{
    protected $table = 'auction';

    public $timestamps = false;

    protected $fillable = [
        'sellerId',
        'sellerName',
        'sellerClanName',
        'itemType',
        'itemId',
        'itemObjectId',
        'itemName',
        'itemQuantity',
        'startingBid',
        'currentBid',
        'endDate'
    ];

    protected $guarded = [];

        
}