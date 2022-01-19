@extends('layouts.template')

@section('title', 'Cursos create')


@section('content')
    <h1>Cursos create</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <br>
        <label for="">Descripcion</label>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        <label for="">Categoria</label>
        <input type="text" name="categoria">
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
