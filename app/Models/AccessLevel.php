<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessLevel
 */
class AccessLevel extends Model
{
    protected $table = 'access_levels';

    protected $primaryKey = 'accessLevel';

	public $timestamps = false;

    protected $fillable = [
        'name',
        'nameColor',
        'useNameColor',
        'titleColor',
        'useTitleColor',
        'isGm',
        'allowPeaceAttack',
        'allowFixedRes',
        'allowTransaction',
        'allowAltg',
        'giveDamage',
        'takeAggro',
        'gainExp',
        'canDisableGmStatus'
    ];

    protected $guarded = [];

        
}