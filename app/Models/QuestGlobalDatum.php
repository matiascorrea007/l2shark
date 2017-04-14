<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestGlobalDatum
 */
class QuestGlobalDatum extends Model
{
    protected $table = 'quest_global_data';

    public $timestamps = false;

    protected $fillable = [
        'quest_name',
        'var',
        'value'
    ];

    protected $guarded = [];

        
}