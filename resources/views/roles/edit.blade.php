@extends('layouts.app')

@section('content')
    <h1>Editar rol</h1>

    <form action="/roles/{{$role->id}}" method="POST">

        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" name="name" class="form-control" type="text" value="{{$role->name}}">
        </div>

        <div class="form-group">
            <label for="roles">Permisos</label>
            @foreach(App\Permission::all() as $permission)
                <div class="form-check">

                    @if($role->hasPermission($permission->name))
                        <input type="checkbox" name="permissions[{{$permission->id}}]" class="form-check-input" id="{{$permission->name}}" checked>
                    @else
                        <input type="checkbox" name="permissions[{{$permission->id}}]" class="form-check-input" id="{{$permission->name}}">
                    @endif

                    <label class="form-check-label" for="{{$permission->id}}">{{$permission->name}}</label>

                </div>
            @endforeach
        </div>

        {{ method_field('PATCH') }}

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection