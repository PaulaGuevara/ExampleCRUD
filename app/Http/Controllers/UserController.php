<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User as User;
use App\Models\Statuses as Statuses;
use App\Models\Roles as Roles;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $tabla = new User;
        $tabla->name=$request->name;
        $tabla->email=$request->email;
        $tabla->password=Hash::make($request->password);
        $tabla->status_id=$request->status_id;
        $tabla->role_id=$request->role_id;
        $tabla->save();
        return redirect('user');
    }    
    public function index()
    {
        $datos = User::all();
        return \View::make('user/list',compact('datos'));
    }
    public function create()
    {
        $rol = Roles::all();
        $status = Statuses::all();
        return \View::make('user/new', compact('status','rol'));
    }
     public function edit($id)
    {
        $status = Statuses::all();
        $datos = User::find($id);
        $rol = Roles::all();
        return \View::make('user/update',compact('datos','status','rol')); 
    }
    public function update($id,Request $request)
    {
        $datos = User::find($id);
        $datos->name=$request->name;
        $datos->email=$request->email;
        $datos->password=$datos->password;
        $datos->status_id=$request->status_id;
        $datos->role_id=$request->role_id;
        $datos->save();
        return redirect('user');
    }    
    public function destroy($id)
    {
        $datos = User::find($id);
        $datos->delete();
        return redirect()->back();
    }
}
