@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>{{$type->name}}</h1>

        <p class="py-5">{{$type->description}}</p>


        <a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning">Modifica</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Elimina
        </button>

    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina tipologia</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Desideri realmente eliminare il tipo : "{{ $type->name }}" ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
              <form action="{{route('admin.types.destroy', $type->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Elimina</button>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection