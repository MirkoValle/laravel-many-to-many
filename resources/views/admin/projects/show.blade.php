@extends('layouts.admin')

@section('title')
    {{ $project->nome}} Administration
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <h1>Nome: {{ $project->nome}}</h1>
            <p> @if ($project->type->nome == null)
                <td>Tipo di progetto non presente</td>
            @else
            <td> <strong>Tipo:</strong>  <span class="d-inline-block px-3 rounded" style="background: {{$project->type->colore}}">{{ $project->type->nome}}</span></td>

            @endif</p>
            <p> <strong>Tecnlogia:</strong>
                @forelse ($project->Technologies as $technology)
                <span class="badge text" style="background-color: {{ $technology->colore }}">

                    {{ $technology->nome}}
                </span>
                @empty
                None
                @endforelse</p>
            <p><a href=" {{ $project->url_repo}}">Clicca qui per Git Hub</a></p>
            <p> <strong>Info:</strong>  {{$project->info}}</p>
            <img src="{{ asset('storage/' . $project->img ) }}" alt="{{$project->nome}}" class="img-fluid">
        </div>
        <div class="d-flex">
            <a href="{{ route('admin.projects.edit', $project)}}" class="btn btn-warning d-flex justify-content-center">Edit</a>
            <form action="{{route('admin.projects.destroy', $project)}}" method="POST" class="d-inline-block form-delete mx-2" data-post-name="{{$project->nome}}">

                @method("delete")
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endsection

    @section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
