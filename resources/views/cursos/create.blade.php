@extends('layouts.template')

@section('title', 'Cursos create')


@section('content')
    <h1>Cursos create</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{old('name')}}">
            <br>
            @error('name')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Descripcion</label>
            <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea>
            <br>
            @error('description')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Categoria</label>
            <input type="text" name="categoria" value="{{old('categoria')}}">
            <br>
            @error('categoria')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
