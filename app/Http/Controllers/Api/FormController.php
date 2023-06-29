<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\form;
use Response;

class FormController extends Controller
{
    
    
    public function create(request $request){

        $form = new form();

        $form->name = $request -> input("name");
        $form->last_name = $request -> input("last_name");
        $form->e_mail = $request -> input("e_mail");
        $form->country = $request -> input("country");
        
        $form->save();

        $message = ["message" => "Registro Exitoso"];
        
        return response()->json($message);
    }
    
    public function read(request $request){

        $forms = new form();
        $data = $forms->all();

        return response()->json ($data);
    }

    public function update(request $request){

        $idform = $request->query("id");

        $form = new form ();

        $formEspecifico = $form -> find ($idform);

        $formEspecifico->name = $request -> input("name");
        $formEspecifico->last_name = $request -> input("last_name");
        $formEspecifico->e_mail = $request -> input("e_mail");
        $formEspecifico->country = $request -> input("country");

        $formEspecifico -> save();

        $message = [
            "message" => "Actualizacion exitosa",
            "idForm" => $request -> query("id"),
            "nameForm" => $formEspecifico -> name
    ];

        return $message;
    }

    public function delete(request $request){

        $idform = $request->query("id");

        $form = new form ();

        $formEspecifico = $form -> find ($idform);

        $formEspecifico -> delete();

        $message = [
            "message" => "Eliminacion exitosa",
            "idForm" => $request -> query("id"),
    ];

        return $message;
    }
}
