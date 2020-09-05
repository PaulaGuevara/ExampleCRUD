@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="" method="post" novalidate class="form-inline">
                    @csrf                    
                    <div class="form-group">                        
                        <a href="{{route('typestatus.create')}}" class=" btn btn-primary">Crear</a> 
                    </div>                   
                </form>
            </article>
            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typestatus as $types)
                            <tr>
                                <td>{{$types->id}}</td>
                                <td>{{$types->name}}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{route('typestatus.edit',['id' => $types->id])}}">Editar</a>
                                    <a class="btn btn-danger btn-xs" href="{{route('typestatus/destroy',['id' => $types->id])}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection