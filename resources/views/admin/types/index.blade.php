@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Tutti i tipi</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome tipo</th>
                <th scope="col">Descrizione</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

                @dump($types)
                @foreach ($types as $type)
                    
                    <tr>
                        <td>{{$type->name}}</td>
                        <td>{{$type->description}}</td>
                        <td>
                            <a href="{{route('admin.types.show', $type->id)}}" class="btn btn-outline-primary">Vedi</a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{-- <a href="{{route('admin.types.create')}}" class="btn btn-primary">Aggiungi una tipologia</a> --}}

    </div>

@endsection