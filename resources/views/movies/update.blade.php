@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('movie/update',['id' => $movie->id])}}" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>NOMBRE</label>
                        <input type="text" name="name" class="form-control" required value="{{$movie->name}}">
                    </div>
                    <div class="form-group">
                        <label>DESCRIPCION</label>
                        <input type="text" name="description" class="form-control" required value="{{$movie->description}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">ENVIAR</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection