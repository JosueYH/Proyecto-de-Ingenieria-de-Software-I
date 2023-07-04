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

        //return view('litigante.mostrar', ['listLitigante' => $listLitigante]); //Otra forma  de retornar
    }

    //Método  Insertar Reistro:
    public function actionInsert(Request $request)
	{
		if($request->isMethod('post'))
		{
			$tLitigante = new TLitiganteModel();

			$tLitigante->litigante_id = uniqid();
            //$tLitigante->name = $request->input('txtName');
            $tLitigante->nombre_parte = $request->input('txtname');
            $tLitigante->direccion = $requests->input('txtaddress');
            $tLitigante->telefono = $requests->input('txtphone');
            $tLitigante->email = $requests->input('txtemail');
			$tLitigante->save();

			return redirect('litigante/insertar');
		}

        //dd($tLitigante);  //Para Depurar (Luego, borrar esta linea)
		return view('litigante/insertar');
	}

}

