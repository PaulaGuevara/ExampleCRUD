<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_statuses as Type_statuses;

class TypeStatusController extends Controller
{
    public function store(Request $request)
    {
        $tipo = new Type_statuses;
        $tipo->create($request->all());
        return redirect('typestatus');
    }
    public function index()
    {
        $typestatus = Type_statuses::all();
        return \View::make('typestatus/list',compact('typestatus'));
    }
    public function create()
    {
        return \View::make('typestatus/new');
    }
    public function edit($id)
    {
        $typestatus = Type_statuses::find($id);
        return \View::make('typestatus/update',compact('typestatus')); 
    }
    public function update($id,Request $request)
    {
        $typestatus = Type_statuses::find($id);
        $typestatus->name=$request->name;
        $typestatus->save();
        return redirect('typestatus');
    }
    public function destroy($id)
    {
        $typestatus = Type_statuses::find($id);
        $typestatus->delete();
        return redirect()->back();
    }

}
