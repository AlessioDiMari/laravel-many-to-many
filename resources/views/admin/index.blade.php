@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Sezione Admin</h1>
        <h3>Benvenuto {{$user->name}}</h3>

        {{-- @dump($user) --}}


        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Sezione progetti</a>

    </div>

@endsection