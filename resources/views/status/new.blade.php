@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('status.store')}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>NOMBRE DE ESTADO</label>
                        <input type="text" name="name" class="form-control" required>
                    </div> 
                    <div class="form-group">
                        <label>TIPO</label>
                        <select name="type_status_id" class="form-control" required>
                            <option selected>Seleccione</option>
                           @foreach ($typestatus as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
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