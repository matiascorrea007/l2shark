<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etcitem
 */
class Etcitem extends Model
{
    protected $table = 'etcitem';

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