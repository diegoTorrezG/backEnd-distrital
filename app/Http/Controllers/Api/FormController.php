<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\form;
use Illuminate\Http\Response;

class FormController extends Controller
{
    
    
    public function create(request $request){

        $form = new form();

        $form->name = $request -> input("name");
        $form->lastName = $request -> input("lastName");
        $form->email = $request -> input("email");
        $form->country = $request -> input("country");
        
        $form->save();

        $message = ["message" => "Registro Exitoso"];
        
        /*return response()->json($message);*/

        return response()->json($message, 201);
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
        $formEspecifico->lastName = $request -> input("lastName");
        $formEspecifico->email = $request -> input("email");
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
