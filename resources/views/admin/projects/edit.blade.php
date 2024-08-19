@extends('layouts.admin')

@section('title')
    Edit {{ $project->nome}} Administration
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
            @endif

        </div>

        <div class="col-8">
            <form action="{{ route('admin.projects.update', $project)}}" method="POST" id="creation_form" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome', $project->nome)  }}">
                    </div>

                    <div class="mb-3">
                        <label for="type_id">Tipo</label>
                        <select class="form-select" aria-label="Default select example" name="type_id" id="type_id">
                            @foreach ($types as $type)
                                <option value="{{$type->id}}" {{($type->id == old("type_id", $project->type_id)) ? "selected" : ""}}>{{$type->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="technology_id">Linguaggio utilizzato</label>
                        <div class=" d-flex flex-wrap ">
                            @foreach ($technologies as $technology)
                            @if ($errors->any())
                            <input name="technologies[]" type="checkbox" class="btn-check" id="technology-check-{{$technology->id}}" autocomplete="off" value="{{$technology->id}}"
                            {{ in_array($technology->id, old('technologies', [])) ? "checked" : ""}}
                            >
                            @else
                            <input name="technologies[]" type="checkbox" class="btn-check" id="technology-check-{{$technology->id}}" autocomplete="off" value="{{$technology->id}}"
                            {{ $project->technologies->contains($technology) ? "checked" : ""}}
                            >
                            @endif

                            <label class="btn btn-outline-primary mb-2" for="technology-check-{{$technology->id}}" style="--dynamic-color: {{ $technology->colore }}">
                                    <div class="inner">{{$technology->nome}}</div>
                            </label>

                            @endforeach
                    </div>


                    <div class="mb-3">
                        <label for="info">Info</label>
                        <input type="text" class="form-control"  placeholder="Info" id="info" name="info" value="{{ old('info', $project->info) }}">
                        </div>

                    <div class="mb-3">
                    <label for="url_repo">Link Git Hub</label>
                    <input type="text" class="form-control"  placeholder="Url" id="url_repo" name="url_repo">
                    </div>

                    <div>
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input class="form-control mb-3" type="file" id="img" name="img" value="{{ old('img', $project->img)}}">
                    </div>


                    <div class="d-flex justify-content-between mt-3">

                            <input class="btn btn-primary" type="submit" value="Aggiorna Progetto">
                            <input class="btn btn-warning" type="reset" value="Reset">

                    </div>

            </form>
        </div>
    </div>
    @endsection
