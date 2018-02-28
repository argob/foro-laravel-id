@extends('layouts.app')

@section('content')
    <h1>{{$user->given_name}} <a href="/usuarios/{{$user->id}}/editar" class="btn btn-sm btn-secondary">Editar</a></h1>

    <h2>Datos</h2>
    <p class="lead">{{$user->email}}</p>

    <h2>Roles</h2>

    <ul class="list-group">
    @foreach(App\Role::all() as $role)
        <li class="list-group-item d-flex justify-content-between align-items-center">

            {{$role->name}}

            @if($user->hasRole($role->name))
                <span class="badge badge-primary badge-pill">Si</span>
            @else
                <span class="badge badge-primary badge-pill">No</span>
            @endif

        </li>
    @endforeach
    </ul>

@endsection