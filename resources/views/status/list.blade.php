@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="" method="post" novalidate class="form-inline">
                    @csrf                    
                    <div class="form-group">                        
                        <a href="{{route('status.create')}}" class=" btn btn-primary">Crear</a> 
                        <a href="{{route('typestatus.index')}}" class=" btn btn-dark btn-link">Tipo estado</a> 
                    </div>                   
                </form>
            </article>
            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>                            
                            <th>Nombre</th>
                            <th>Tipo estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($status as $s)
                            <tr>                                
                                <td>{{$s->name}}</td>
                                <td>{{$s->type_status_id}}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{route('status.edit',['id' => $s->id])}}">Editar</a>
                                    <a class="btn btn-danger btn-xs" href="{{route('status/destroy',['id' => $s->id])}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection