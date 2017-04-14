<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClassList
 */
class ClassList extends Model
{
    protected $table = 'class_list';

    public $timestamps = false;

    protected $fillable = [
        'class_name',
        'parent_id'
    ];

    protected $guarded = [];

        
}