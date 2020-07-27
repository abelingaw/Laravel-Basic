@extends('layouts.app')

@section('content')
    <br><br>
    <section class="jumbotron text-center">
        <div class="starter-template">
            <h1>{{config('app.name', 'LSAPP')}} Practice</h1>
            <p class="lead text-muted">Abel's Laravel work regarding the series "Laravel from Scratch."</p>
            <p>
            <a href="{{ route('register') }}" class="btn btn-primary my-2">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary my-2">Login</a>
            </p>
        </div>
    </section>
@endsection

