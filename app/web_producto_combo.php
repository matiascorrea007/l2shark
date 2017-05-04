<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\web_producto;
use Soft\web_categoria;

class web_producto_combo extends Model
{

protected $fillable = [
          'id',
          'nombre',
          'imagen',
          'web_categoria_id',
            
    ];


    public function web_producto()
    {
      //una combo puede tener varias productos
        return $this->hasMany(web_producto::class);
    }

    public function web_categoria()
    {
      //una combo corresponde a una categoria
        return $this->belongsTo(web_categoria::class);
    }

}
