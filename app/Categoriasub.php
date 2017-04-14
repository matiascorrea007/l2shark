<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\Producto;
use Soft\Categoria;

class Categoriasub extends Model
{
    protected $fillable = [
        	'id',
        	'nombre',
            'slug',
        	'categoria_id',
        	'icono',
            
    ];

    //para realizar el select dinamico
    public static function subcategoriaselect($id){
        return categoriasub::where('categoria_id','=',$id)->get();
    }

    public function categoria()
    {
        //un sub-categoria puede tener una categoria
        return $this->belongsTo(Categoria::class);
    }

     public function producto()
    {
        //una sub-categoria puede tener muchas productos
       return $this->hasMany(Producto::class);
    }



}
