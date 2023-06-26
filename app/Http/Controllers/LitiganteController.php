
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

    //Método para modificar un registro ... 
        public function modificarRegistro($id)
            {
                 $registro = TuModelo::find($id);
                
                    if ($registro) {
                        // Aquí puedes modificar los atributos del registro según tus necesidades
                        $registro->campo1 = 'Nuevo valor 1';
                        $registro->campo2 = 'Nuevo valor 2';
                        // ...
                
                        $registro->save();
                
                        return redirect()->back()->with('success', 'El registro se ha modificado correctamente.');
                    } else {
                        return redirect()->back()->with('error', 'No se encontró el registro.');
                    }
                }
                
    //Para registrar un usuario
       


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
