<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as User;
use App\Models\Statuses as Statuses;
use App\Models\Rentals as Rentals;

class RentalsController extends Controller
{
    public function store(Request $request)
    {
        $tabla = new Rentals;
        $tabla->create($request->all());
        return redirect('rentals');
    }
    public function index()
    {
        $datos = Rentals::all();
        return \View::make('rentals/list',compact('datos'));
    }
    public function create()
    {
        $user = User::all();
        $status = Statuses::all();
        return \View::make('rentals/new', compact('status','user'));
    }
    public function edit($id)
    {
        $status = Statuses::all();
        $user = User::all();
        $datos = Rentals::find($id);
        return \View::make('rentals/update',compact('datos','status','user')); 
    }
    public function update($id,Request $request)
    {
        $datos = Rentals::find($id);
        $datos->start_date=$request->start_date;
        $datos->end_date=$request->end_date;
        $datos->total=$request->total;
        $datos->user_id=$request->user_id;
        $datos->status_id=$request->status_id;
        $datos->save();
        return redirect('rentals');
    }   
    public function destroy($id)
    {
        $datos = Rentals::find($id);
        $datos->delete();
        return redirect()->back();
    }
}
