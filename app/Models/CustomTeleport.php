<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomTeleport
 */
class CustomTeleport extends Model
{
    protected $table = 'custom_teleport';

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