@extends('layouts.app')

@section('content')

<form action="/usuarios/{{$user->id}}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="email">Nombre</label>
        <input id="email" name="family_name" readonly class="form-control-plaintext" type="text" value="{{$user->family_name}}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" readonly class="form-control-plaintext" type="text" value="{{$user->email}}">
    </div>

    <div class="form-group">
        <label for="roles">Roles</label>
        @foreach(App\Role::all() as $role)
        <div class="form-check">

            @if($user->hasRole($role->name))
                <input type="checkbox" name="roles[{{$role->id}}]" class="form-check-input" id="{{$role->name}}" checked>
            @else
                <input type="checkbox" name="roles[{{$role->id}}]" class="form-check-input" id="{{$role->name}}">
            @endif

            <label class="form-check-label" for="{{$role->id}}">{{$role->name}}</label>

        </div>
        @endforeach
    </div>

    {{ method_field('PATCH') }}

    <button type="submit" class="btn btn-primary">Editar</button>
</form>

@endsection