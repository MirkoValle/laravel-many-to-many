@extends('layouts.admin')

@section('title')
    {{ $project->nome}} Administration
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <h1>{{ $project->nome}}</h1>
            <p class="d-inline-block px-3 rounded" style="background: {{$project->type->colore}}">{{ $project->type->nome}}</p>
            <p>{{ $project->linguaggio}}</p>
            <p class="text-center"><a href=" {{ $project->url_repo}}">Clicca qui per Git Hub</a></p>
            <p>{{$project->info}}</p>
        </div>
        <div class="d-flex justify-content-center">
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
