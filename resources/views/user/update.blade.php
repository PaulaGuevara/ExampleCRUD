@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('user/update',['id' => $datos->id])}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>NOMBRE</label>
                    <input type="text" name="name" class="form-control" value="{{$datos->name}}" required>
                    </div>
                    <div class="form-group">
                        <label>CORREO</label>
                        <input type="email" name="email" class="form-control" value="{{$datos->email}}" required>
                    </div>
                    {{-- <div class="form-group">
                        <label>CONTRASEÑA</label>
                        <input type="password" name="password" class="form-control" value="{{$datos->password}}" required>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label>CONFIRMA TU CONTRASEÑA</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div> --}}
                    <div class="form-group">
                        <label>ESTADO</label>
                        <select name="status_id" class="form-control" required>
                            <option selected value="{{$datos->status_id}}">Seleccione</option>
                           @foreach ($status as $s)
                        <option value="{{$s->id}}">{{$s->name }} - {{$s->type_status_id}} </option>
                           @endforeach
                        </select>                    
                    </div>   
                    <div class="form-group">
                        <label>ROL</label>
                        <select name="role_id" class="form-control" required>
                            <option selected value="{{$datos->role_id}}">Seleccione</option>
                           @foreach ($rol as $r)
                        <option value="{{$r->id}}">{{$r->name}}</option>
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