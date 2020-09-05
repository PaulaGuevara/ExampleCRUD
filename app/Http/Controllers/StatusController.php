<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statuses as Statuses;
use App\Models\Type_statuses as Type_statuses;

class StatusController extends Controller
{
    public function store(Request $request)
    {
        $tabla = new Statuses;
        $tabla->create($request->all());
        return redirect('status');
    }
    public function index()
    {
        $status = Statuses::all();
        return \View::make('status/list',compact('status'));
    }
    public function create()
    {
        $typestatus = Type_statuses::all();
        return \View::make('status/new', compact('typestatus'));
    }
    public function edit($id)
    {
        $typestatus = Type_statuses::all();
        $status = Statuses::find($id);
        return \View::make('status/update',compact('status','typestatus')); 
    }
    public function update($id,Request $request)
    {
        $status = Statuses::find($id);
        $status->name=$request->name;
        $status->type_status_id=$request->type_status_id;
        $status->save();
        return redirect('status');
    }    
    public function destroy($id)
    {
        $status = Statuses::find($id);
        $status->delete();
        return redirect()->back();
    }
}
