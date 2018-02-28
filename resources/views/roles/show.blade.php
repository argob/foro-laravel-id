@extends('layouts.app')

@section('content')
    <h1>{{$role->name}}</h1>

    <h2>Permisos</h2>

    <ul class="list-group">
        @foreach(App\Permission::all() as $permission)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                {{$permission->name}}

                @if($role->hasPermission($permission->name))
                    <span class="badge badge-primary badge-pill">Si</span>
                @else
                    <span class="badge badge-primary badge-pill">No</span>
                @endif

            </li>
        @endforeach
    </ul>
@endsection