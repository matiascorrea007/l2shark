<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AutoAnnouncement
 */
class AutoAnnouncement extends Model
{
    protected $table = 'auto_announcements';

    public $timestamps = false;

    protected $fillable = [
        'announcement',
        'delay'
    ];

    protected $guarded = [];

        
}