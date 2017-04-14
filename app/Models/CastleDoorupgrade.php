<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CastleDoorupgrade
 */
class CastleDoorupgrade extends Model
{
    protected $table = 'castle_doorupgrade';

    protected $primaryKey = 'doorId';

	public $timestamps = false;

    protected $fillable = [
        'hp',
        'pDef',
        'mDef'
    ];

    protected $guarded = [];

        
}