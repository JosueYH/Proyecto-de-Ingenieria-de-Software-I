<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TLitiganteModel;   //Importamos el modelo Litigante creado

class LitiganteController extends Controller
{

    public function actionGetAll()
	{
		$listLitigante = TLitiganteModel::all();

        return view('litigante/mostrarlitigantes',
		[
			'listLitigante' => $listLitigante
		]);
    }

/*
    public function mostrarRegistros()
    {
        $registros = TLitiganteModel::all();
        return view('litigante/mostrarlitigantes', compact('registros'));

        //$registros = NombreModelo::all(); // Recupera todos los registros de la tabla
        //return view('nombre_vista', compact('registros'));
    }
*/

}

