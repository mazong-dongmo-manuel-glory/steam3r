@extends('layout')
@section('content')

    <form method="POST" action="{{route('game.dologin')}}">
        <input type="email" placeholder="email" name="email" value="{{old('email')}}">
        <input type="password" placeholder="password" name="password">
        <button type="submit">log in</button>
    </form>
@endsection
