<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantAreasList
 */
class MerchantAreasList extends Model
{
    protected $table = 'merchant_areas_list';

    protected $primaryKey = 'merchant_area_id';

	public $timestamps = false;

    protected $fillable = [
        'merchant_area_name',
        'tax',
        'Chaotic'
    ];

    protected $guarded = [];

        
}