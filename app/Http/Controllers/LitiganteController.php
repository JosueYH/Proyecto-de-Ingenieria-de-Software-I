<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidades\TLitiganteModel;   //Importamos el modelo

class LitiganteController extends Controller
{
    public function actionGetAll()
	{
		$listLitigante = TLitiganteModel::all();

        //dd($listLitigante);  //Para Depurar (Luego, borrar esta linea)

        return view('litigante/mostrarlitigantes',
		[
			'listLitigante' => $listLitigante
        ]);

        //return view('litigante.mostrarlitigantes', ['listLitigante' => $listLitigante]); //Otra forma  de retornar
    }
}

