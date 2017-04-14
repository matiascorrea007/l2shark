<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AuctionWatch
 */
class AuctionWatch extends Model
{
    protected $table = 'auction_watch';

    public $timestamps = false;

    protected $fillable = [
        'charObjId',
        'auctionId'
    ];

    protected $guarded = [];

        
}