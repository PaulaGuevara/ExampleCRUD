@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('rentals/update',['id' => $datos->id])}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="example-date-input" class="col-2 col-form-label">FECHA INICIO</label>                        
                          <input name="start_date" class="form-control" type="date" value="{{$datos->start_date}}" id="example-date-input" readonly>                        
                    </div>

                    <div class="form-group">
                        <label for="example-date-input" class="col-2 col-form-label">FECHA FIN</label>                        
                          <input name="end_date" class="form-control" type="date" value="{{$datos->end_date}}" id="example-date-input" required>                        
                    </div>

                      <div class="form-group">
                        <label>TOTAL</label>
                        <input type="number" name="total" class="form-control" value="{{$datos->total}}" required>
                    </div>

                    <div class="form-group">
                        <label>CORREO USUARIO</label>
                        <select name="user_id" class="form-control" required>
                        <option selected value="{{$datos->user_id}}">{{$datos->user_id}}</option>
                           @foreach ($user as $u)
                        <option value="{{$u->id}}">{{$u->id}}-{{$u->email}}</option>
                           @endforeach
                        </select>                    
                    </div>     
                    <div class="form-group">
                        <label>ESTADO</label>
                        <select name="status_id" class="form-control" required>
                            <option selected value="{{$datos ->status_id}}">{{$datos ->status_id}}</option>
                           @foreach ($status as $s)
                        <option value="{{$s->id}}">{{$s->name}}</option>
                           @endforeach
                        </select>                    
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">ENVIAR</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection