@extends('layouts.app')

@section('content')
    <h1>Roles <a class="btn btn-primary" href="{{ route('role.create') }}">Agregar</a></h1>
    <ul>
        @foreach ($roles as $role)
            <li><a href="{{route('role.edit', ['id' => $role->id])}}">{{ $role->name }}</li>
        @endforeach
    </ul>
@endsection