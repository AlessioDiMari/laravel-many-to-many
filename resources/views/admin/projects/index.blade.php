@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Tutti i post</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome progetto</th>
                <th scope="col">Descrizione</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($projects as $project)
                    
                    <tr>
                        <td>{{$project->name}}</td>
                        <td>{{$project->argument}}</td>
                        <td>
                            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-outline-primary">Vedi</a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi un progetto</a>

    </div>

@endsection