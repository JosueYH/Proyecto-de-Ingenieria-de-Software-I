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
            $tLitigante->correo_electronico  = $requests->input('txtemail');
			$tLitigante->save();

			return redirect('litigante/insertar');
		}

        //dd($tLitigante);  //Para Depurar (Luego, borrar esta linea)
		return view('litigante/insertar');
    }

    //Función para editar un registro
    public function edit($id)
    {
        $registro = Registro::findOrFail($id);
        return view('registros.editar', compact('registro'));
    }

    //Función para actualiar un Registro:
    public function update(Request $request, $id)
    {
        $registro = Registro::findOrFail($id);
        // Validar y actualizar los datos del registro
        $registro->Nombre = $request->input('txtname');
        $registro->Direccion = $request->input('txtaddress');
        $registro->Telefono = $request->input('txtphone');
        $registro->Correo = $request->input('txtemail');
        // Otros campos
        $registro->save();

        // Redireccionar a la página de lista de registros u otra acción que desees realizar
        //return redirect()->route('registros.index')->with('success', 'Registro actualizado exitosamente');
        return redirect()->route('litigante.mostrar')->with('success', 'Registro actualizado exitosamente');
        //
        }

    //Función para eliminar un registro
    public function destroy($id)
    {
        $registro = Registro::findOrFail($id);
        $registro->delete();

        // Redireccionar a la página de lista de registros u otra acción que desees realizar
        return redirect()->route('registros.index')->with('success', 'Registro eliminado exitosamente');
    }


}

