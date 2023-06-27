<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TLitigante extends Model {
    //protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'direccion']; //Estamos indicando los attributos de la tabla

    protected $table = 'Tlitigante'; //Geral, laravel asume a todos los attributos de la tabla
    protected $primaryKey = 'idLitigante'; //el nombre de la columna que actúa como clave primaria en la tabla asociada al modelo Litigante
    protected $keyType = 'string';  //Esta línea especifica el tipo de dato de la clave primaria en el modelo Litigante
    public $incrementing = false; //false, le estás diciendo a Laravel que no asuma que la clave primaria se incrementa automáticamente

    public $timestamps = true; //Esta línea especifica si el modelo Litigante debe tener columnas de marca de tiempo (created_at y updated_at) en la tabla asociada

    // Relación con otros modelos, si es necesario
    // ...

    // Métodos adicionales, si es necesario
    // ...
}

?>
