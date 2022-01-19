@extends('layouts.template')

@section('title', 'Cursos create')


@section('content')
    <h1>Cursos edit</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{ $curso->name }}">
        <br>
        <label for="">Descripcion</label>
        <textarea name="description" cols="30" rows="10">{{ $curso->description }}</textarea>
        <br>
        <label for="">Categoria</label>
        <input type="text" name="categoria" value="{{ $curso->categoria }}">
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
