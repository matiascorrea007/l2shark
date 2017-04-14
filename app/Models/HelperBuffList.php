<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HelperBuffList
 */
class HelperBuffList extends Model
{
    protected $table = 'helper_buff_list';

    public $timestamps = false;

    protected $fillable = [
        'skill_id',
        'name',
        'skill_level',
        'lower_level',
        'upper_level',
        'is_magic_class'
    ];

    protected $guarded = [];

        
}