<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountPanel
 */
class AccountPanel extends Model
{
    protected $table = 'account_panel';

    protected $primaryKey = 'ManagerID';

	public $timestamps = false;

    protected $fillable = [
        'visitas'
    ];

    protected $guarded = [];

        
}