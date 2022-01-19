@extends('layouts.template')

@section('title', 'Curso ' . $curso->name)


@section('content')
    <h1>Curso {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a curso</a><br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p><strong>Descripcion: </strong> {{ $curso->description }}</p>

    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
