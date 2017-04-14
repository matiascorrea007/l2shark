<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogPaypalDonation
 */
class LogPaypalDonation extends Model
{
    protected $table = 'log_paypal_donations';

    protected $primaryKey = 'transaction_id';

	public $timestamps = false;

    protected $fillable = [
        'donation',
        'amount',
        'character_name',
        'dt'
    ];

    protected $guarded = [];

        
}