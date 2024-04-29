@extends('layouts.app')

@section('content')

    <div class="container py-5">

      <img src="{{asset('storage/'. $project->cover_image)}}" alt="Copertina" class="img-fluid">

        <h1>{{$project->name}}</h1>
        <small>{{$project->type->name}}</small>

        <p class="py-5">{{$project->argument}}</p>


        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Elimina
        </button>

        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Ritorna alla lista progetti</a>


    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina comic</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Desideri realmente eliminare il fumetto : "{{ $project->name }}" ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Elimina</button>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection