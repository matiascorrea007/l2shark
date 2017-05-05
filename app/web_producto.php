<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\web_producto_combo;

class web_producto extends Model
{	

	protected $fillable = [
          'id',
          'item_id',
          'nombre',
          'precio',
          'slug',
          'web_producto_combo_id',
          'imagen',
          'ruta',
            
    ];



    public function web_producto_combo()
    {
      //una producto puede tener varias combos
        return $this->hasMany(web_producto_combo::class);
    }

    



}
