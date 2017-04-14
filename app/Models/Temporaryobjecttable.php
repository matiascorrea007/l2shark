<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Temporaryobjecttable
 */
class Temporaryobjecttable extends Model
{
    protected $table = 'temporaryobjecttable';

    protected $primaryKey = 'object_id';

	public $timestamps = false;

    protected $fillable = [];

    protected $guarded = [];

        
}