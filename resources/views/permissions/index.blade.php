@extends('layouts.app')

@section('content')
    <h1>Permisos <a class="btn btn-primary" href="{{ route('permission.create') }}">Agregar</a></h1>
    <ul>
        @foreach ($permissions as $permission)
            <li>{{ $permission->name }}</li>
        @endforeach
    </ul>
@endsection