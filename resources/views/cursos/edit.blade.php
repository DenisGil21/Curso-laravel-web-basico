@extends('layouts.template')

@section('title', 'Cursos create')


@section('content')
    <h1>Cursos edit</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
            <br>
            @error('name')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Descripcion</label>
            <textarea name="description" cols="30" rows="10">{{ old('description', $curso->description) }}</textarea>
            <br>
            @error('description')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Categoria</label>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
            <br>
            @error('categoria')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
