<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AuctionBid
 */
class AuctionBid extends Model
{
    protected $table = 'auction_bid';

    public $timestamps = false;

    protected $fillable = [
        'auctionId',
        'bidderId',
        'bidderName',
        'clan_name',
        'maxBid',
        'time_bid'
    ];

    protected $guarded = [];

        
}