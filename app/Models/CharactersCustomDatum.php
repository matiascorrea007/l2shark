<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharactersCustomDatum
 */
class CharactersCustomDatum extends Model
{
    protected $table = 'characters_custom_data';

    protected $primaryKey = 'obj_Id';

	public $timestamps = false;

    protected $fillable = [
        'char_name',
        'hero',
        'noble',
        'donator',
        'hero_end_date'
    ];

    protected $guarded = [];

        
}