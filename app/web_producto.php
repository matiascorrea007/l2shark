<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use web_producto_combo;

class web_producto extends Model
{	

	protected $fillable = [
          'id',
          'nombre',
          'precio',
          'slug',
          'web_producto_combo_id',
          'imagen',
          'filename',
            
    ];



    public function web_producto_combo()
    {
      //una producto puede tener varias combos
        return $this->hasMany(web_producto_combo::class);
    }

    



}
