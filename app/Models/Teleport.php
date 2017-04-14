<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teleport
 */
class Teleport extends Model
{
    protected $table = 'teleport';

    public $timestamps = false;

    protected $fillable = [
        'Description',
        'loc_x',
        'loc_y',
        'loc_z',
        'price',
        'fornoble'
    ];

    protected $guarded = [];

        
}