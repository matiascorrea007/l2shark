<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ListaTop
 */
class ListaTop extends Model
{
    protected $table = 'lista_top';

    protected $primaryKey = 'ordem';

	public $timestamps = false;

    protected $fillable = [
        'link_voto',
        'link_botao'
    ];

    protected $guarded = [];

        
}