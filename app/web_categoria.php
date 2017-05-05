<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\web_producto_combo;

class web_categoria extends Model
{
   protected $fillable = [
        	'id', 
			'nombre',    
    ];


      public function web_producto_combo()
    {
      //una categoria puede tener varias combos
        return $this->hasMany(web_producto_combo::class);
    }



}
