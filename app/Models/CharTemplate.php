<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharTemplate
 */
class CharTemplate extends Model
{
    protected $table = 'char_templates';

    protected $primaryKey = 'ClassId';

	public $timestamps = false;

    protected $fillable = [
        'ClassName',
        'RaceId',
        'STR',
        'CON',
        'DEX',
        '_INT',
        'WIT',
        'MEN',
        'P_ATK',
        'P_DEF',
        'M_ATK',
        'M_DEF',
        'P_SPD',
        'M_SPD',
        'ACC',
        'CRITICAL',
        'EVASION',
        'MOVE_SPD',
        '_LOAD',
        'x',
        'y',
        'z',
        'canCraft',
        'M_UNK1',
        'M_UNK2',
        'M_COL_R',
        'M_COL_H',
        'F_UNK1',
        'F_UNK2',
        'F_COL_R',
        'F_COL_H',
        'items1',
        'items2',
        'items3',
        'items4',
        'items5'
    ];

    protected $guarded = [];

        
}