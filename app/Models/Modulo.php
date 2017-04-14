<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modulo
 */
class Modulo extends Model
{
    protected $table = 'modulos';

    protected $primaryKey = 'mod_id';

	public $timestamps = false;

    protected $fillable = [
        'mod_name',
        'mod_file',
        'mod_level'
    ];

    protected $guarded = [];

        
}