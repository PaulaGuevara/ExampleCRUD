<?php

namespace App\Http\Controllers;


use App\Models\Roles as Roles;
use App\Models\Statuses as Statuses;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function store(Request $request)
    {
        $tabla = new Roles;
        $tabla->create($request->all());
        return redirect('roles');
    }
    public function index()
    {
        $datos = Roles::all();
        return \View::make('roles/list',compact('datos'));
    }
    public function create()
    {
        $status = Statuses::all();
        return \View::make('roles/new', compact('status'));
    }
    public function edit($id)
    {
        $status = Statuses::all();
        $datos = Roles::find($id);
        return \View::make('roles/update',compact('datos','status')); 
    }
    public function update($id,Request $request)
    {
        $datos = Roles::find($id);
        $datos->name=$request->name;
        $datos->status_id=$request->status_id;
        $datos->save();
        return redirect('roles');
    }   
    public function destroy($id)
    {
        $datos = Roles::find($id);
        $datos->delete();
        return redirect()->back();
    }
}
