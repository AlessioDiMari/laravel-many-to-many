@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Modifica progetto</h1>

        <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
        
            @csrf
            @method('PUT')

            <div class="mb-4">

                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp" placeholder="Titolo" value="{{old('name') ?? $project->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                <small id="titleHelper">Nome del progetto, massimo 255 caratteri</small>

            </div>

            <div class="mb-4">

                <label for="argument" class="form-label">Argomento</label>
                <textarea type="text" class="form-control @error ('argument') is-invalid @enderror" name="argument" id="argument" aria-describedby="emailHelp" placeholder="Argomento">{{old('argument') ?? $project->argument}}</textarea>
                @error('argument')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <img src="{{asset('storage/'. $project->cover_image)}}" alt="Copertina" class="img-fluid">
            <div class="input-group mb-4">
                <label for="cover_image" class="input-group-text">Copertina</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image">
            </div>

            <button class="btn btn-primary">Modifica</button>

        </form>


    </div>

@endsection