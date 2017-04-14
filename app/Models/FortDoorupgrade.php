<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FortDoorupgrade
 */
class FortDoorupgrade extends Model
{
    protected $table = 'fort_doorupgrade';

    protected $primaryKey = 'doorId';

	public $timestamps = false;

    protected $fillable = [
        'fortId',
        'hp',
        'pDef',
        'mDef'
    ];

    protected $guarded = [];

        
}