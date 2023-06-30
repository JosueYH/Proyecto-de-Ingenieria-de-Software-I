
<?php
//------------Primera forma con ----------------------

namespace App\Models;                       //Principal, cuando no hay subcarpetas
namespace App\Models\NombreSubcarpeta;     //Importamos

use Illuminate\Database\Eloquent\Model;  //No cambia, a pesar de importar desde la subcarpeta

//class NombreModelo extends Model {

class ExampleModel extends Model {
    //protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'direccion']; //Estamos indicando los attributos de la tabla

    protected $table = 'NombreTabla';   //General, laravel asume a todos los atributos de la tabla
    protected $primaryKey = 'id';      //el nombre de la columna que actúa como clave primaria en la tabla asociada al modelo Litigante
    //protected $keyType = 'string';  //Esta línea especifica el tipo de dato de la clave primaria en el modelo Litigante
    public $incrementing = false;    //false, le estás diciendo a Laravel que no asuma que la clave primaria se incrementa automáticamente
    public $timestamps = true;      //Esta línea especifica si el modelo Litigante debe tener columnas de marca de tiempo (created_at y updated_at) en la tabla asociada

    // Relación con otros modelos, si es necesario
    // ...

    // Métodos adicionales, si es necesario
    // ...
}



//----------------------Segunda forma con -------------------------------------------------

namespace App\Models;                     //Principal, cuando no hay subcarpetas

use Illuminate\Database\Eloquent\Factories\HasFactory;  // el modelo puede hacer uso de las factorías para generar instancias de ese modelo con datos ficticios.

class NombreModelo extends Model
{
    use HasFactory;   //datos ficticios ---no es necesario ... igua su importación
}

?>

