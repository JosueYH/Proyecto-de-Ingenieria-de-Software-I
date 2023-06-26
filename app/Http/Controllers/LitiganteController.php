
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TLitigante;   //Importamos el modelo Litigante creado

class CityController extends Controller
{

    //Método para mostrar Registros
    public function mostrarRegistros()
    {
        //$registros = TuModelo::all();
        $registros = TLitigante::all();

        return view('tu-vista')->with('registros', $registros);
    }


    //Método para eliminar  un Registro
    public function eliminarRegistro($litigante_id)ćomo modificar  un  registro en laravel con php?ćomo modificar  un  registro en laravel con php?
    {

        $registro = Tlitigante::find($litigante_id);

        if ($registro) {

            $registro->delete();

            //return redirect()->back()->with('success', 'El registro se ha eliminado correctamente.');
            return redirect()->back()->with('success', 'El registro se ha eliminado correctamente.');
        } else {

            return redirect()->back()->with('error', 'No se encontró el registro.');

                }
    }





/*
	public function actionGetAll()
	{
        $listTCity = Tlitigante::all();

		return view('city/getall',
		[
			'listTCity' => $listTCity
        ]);
    }

*/

    //Otro méodo aquí






}
