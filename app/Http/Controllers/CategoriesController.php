<?php

 namespace App\Http\Controllers; 
 use App\Models\Categories as Categories;
 use App\Models\Statuses as Statuses;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
     public function store(Request $request)
    {
        $tabla = new Categories;
        $tabla->create($request->all());
        return redirect('categories');
    }
    public function index()
    {
        $datos = Categories::all();
        return \View::make('categories/list',compact('datos'));
    }
    public function create()
    {
        $status = Statuses::all();
        return \View::make('categories/new', compact('status'));
    }
    public function edit($id)
    {
        $status = Statuses::all();
        $datos = Categories::find($id);
        return \View::make('categories/update',compact('datos','status')); 
    }
    public function update($id,Request $request)
    {
        $datos = Categories::find($id);
        $datos->name=$request->name;
        $datos->status_id=$request->status_id;
        $datos->save();
        return redirect('categories');
    }   
    public function destroy($id)
    {
        $datos = Categories::find($id);
        $datos->delete();
        return redirect()->back();
    }
}
