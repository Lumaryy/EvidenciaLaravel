<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
            return view ('principal');
    }

    public function store(Request $request){
        $request->request->add([ 'cedula'=> Str::slug($request->cedula)]);


        $this->validate($request,[ 

            'nombre'=>'required|min:3|max:50',
            'cedula'=>'required|unique:users|min:3|max:50',
            'telefono'=>'required|unique:users|max:60',
            'cedula'=>'required|confirmed'
        ]);

        users::create([ 
            'nombre'=>$request->nombre,
            'cedula'=>$request->cedula,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
        ]);
        auth()->attemp([ 
            'nombre'=>$request->nombre,
            'cedula'=>$request->cedula,
        ]);

        return redirect()->route('post.index');
    }
}
