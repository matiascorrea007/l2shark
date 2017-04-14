<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Achievement
 */
class Achievement extends Model
{
    protected $table = 'achievements';

    protected $primaryKey = 'owner_id';

	public $timestamps = false;

    protected $fillable = [
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
        'a9',
        'a10',
        'a11',
        'a12',
        'a13',
        'a14',
        'a15',
        'a16',
        'a17',
        'a18',
        'a19',
        'a20',
        'a21',
        'a22',
        'a23',
        'a24'
    ];

    protected $guarded = [];

        
}