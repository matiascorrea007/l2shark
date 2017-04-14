<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Account
 */
class Account extends Model
{
    protected $table = 'accounts';


    protected $fillable = [
        'login',
        'password',
        're_password',
        'lastactive',
        'access_level',
        'lastIP',
        'lastServer',
        'email',
        'accessLevel',
    ];

    protected $guarded = [];

        
}