@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('roles.store')}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>NOMBRE ROL</label>
                        <input type="text" name="name" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>ESTADO</label>
                        <select name="status_id" class="form-control" required>
                            <option selected>Seleccione</option>
                           @foreach ($status as $s)
                        <option value="{{$s->id}}">{{$s->name}}-{{$s->type_status_id}} </option>
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