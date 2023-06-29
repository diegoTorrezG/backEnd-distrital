<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\form;

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
    
    public function read(){

        $forms = new form();
        $data = $forms->all();


        return response()->json ($data);
    }

    public function update(){


        return true;
    }

    public function delete(){


        return true;
    }
}
