<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\crud;

class Crudcontroller extends Controller
{
    public function index(){
        return view('Crud.index');
    }
    public function store(Request $request){
        
        crud::create([
            'name'=>$request->name,
            'email'=>$request->email,

        ]); 

        
    }
    public function show(){
        $users = crud::all();
        return view('crud.show',compact('users'));
    }
    public function edit($id) {
        $user = crud::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('show');
    }

    public function delete($id){
        $user = crud::find($id);
        $user->delete();

        return redirect('show');
    }
}
