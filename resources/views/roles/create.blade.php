@extends('layouts.app')

@section('content')
    <h1>Agregar rol</h1>

    <form action="/roles" method="POST">

        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" name="name" class="form-control" type="text" value="">
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
@endsection