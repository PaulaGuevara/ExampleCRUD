@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="" method="post" novalidate class="form-inline">
                    @csrf                    
                    <div class="form-group">                        
                        <a href="{{route('user.create')}}" class=" btn btn-primary">Crear</a>
                        <a href="{{route('roles.index')}}" class=" btn btn-dark btn-link ">Roles</a>  
                    </div>                   
                </form>
            </article>
            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>                            
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Rol</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $d)
                            <tr>                                
                                <td>{{$d->name}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->status_id}}</td>
                                <td>{{$d->role_id}}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{route('user.edit',['id' => $d->id])}}">Editar</a>
                                    <a class="btn btn-danger btn-xs" href="{{route('user/destroy',['id' => $d->id])}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection