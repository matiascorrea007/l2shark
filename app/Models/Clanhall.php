<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clanhall
 */
class Clanhall extends Model
{
    protected $table = 'clanhall';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'ownerId',
        'lease',
        'desc',
        'location',
        'paidUntil',
        'Grade',
        'paid'
    ];

    protected $guarded = [];

        
}