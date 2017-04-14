<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paystream
 */
class Paystream extends Model
{
    protected $table = 'paystream';

    protected $primaryKey = 'msgid';

	public $timestamps = false;

    protected $fillable = [
        'paymentdate',
        'number_from',
        'numebr_to',
        'char_name',
        'summ',
        'currency'
    ];

    protected $guarded = [];

        
}