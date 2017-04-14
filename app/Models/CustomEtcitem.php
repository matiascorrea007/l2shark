<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomEtcitem
 */
class CustomEtcitem extends Model
{
    protected $table = 'custom_etcitem';

    protected $primaryKey = 'item_id';

	public $timestamps = false;

    protected $fillable = [
        'name',
        'crystallizable',
        'item_type',
        'weight',
        'consume_type',
        'crystal_type',
        'duration',
        'price',
        'crystal_count',
        'sellable',
        'dropable',
        'destroyable',
        'tradeable',
        'oldname',
        'oldtype'
    ];

    protected $guarded = [];

        
}