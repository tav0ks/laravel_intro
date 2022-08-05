@extends('layouts.app')
@section('content')
    <a href="{{ route('users.index') }}">Listagem de usuarios</a>
    <br><br>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="name" id="">

        <br>

        <label for="">Email</label>
        <input type="text" name="email" id="">

        <br>

        <button type="submit">Cadastrar</button>

    </form>
@endsection
