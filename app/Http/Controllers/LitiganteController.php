<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidades\TLitiganteModel;   //Importamos el modelo

class LitiganteController extends Controller
{
    //Método Mostrar Litigantes
    public function actionGetAll()
    {
		$listLitigante = TLitiganteModel::all();

        //dd($listLitigante);  //Para Depurar (Luego, borrar esta linea)

        return view('litigante/mostrar',
		[
			'listLitigante' => $listLitigante
        ]);

        //return view('litigante.mostrarlitigantes', ['listLitigante' => $listLitigante]); //Otra forma  de retornar
    }

    //Método  Insertar Reistro:
    public function actionInsert(Request $request)
	{
		if($request->isMethod('post'))
		{
			$tLitigante = new TLitiganteModel();

			$tLitigante->litigante_id = uniqid();
			$tLitigante->name = $request->input('txtName');

			$tLitigante->save();

			return redirect('litigante/insertar');
		}

        //dd($tLitigante);  //Para Depurar (Luego, borrar esta linea)
		return view('litigante/insertar');
	}

}

