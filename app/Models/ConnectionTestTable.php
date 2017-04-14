<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConnectionTestTable
 */
class ConnectionTestTable extends Model
{
    protected $table = 'connection_test_table';

    public $timestamps = false;

    protected $fillable = [
        'a'
    ];

    protected $guarded = [];

        
}