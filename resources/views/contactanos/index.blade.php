@extends('layouts.template')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="name">
        </div>
        @error('name')
            <small>{{$message}}</small>
        @enderror
        <br>
        <div>
            <label for="">Correo</label>
            <input type="text" name="correo">
        </div>
        @error('correo')
            <small>{{$message}}</small>
        @enderror
        <br>
        <div>
            <label for="">Mensaje</label>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        </div>
        @error('mensaje')
            <small>{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
@endsection
