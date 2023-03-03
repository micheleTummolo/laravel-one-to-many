@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 d-flex justify-content-between">
                <div>
                    <h2 class="fw-bolder">{{ $project->name }}</h2>
                </div>
                <div>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.index') }}" role="button">Elenco progetti</a>
                </div>
            </div>
            <div class="col-12 mt-4 d-flex">
                <h5 class="fw-bold m-0">Tipo:</h5>
                <p class="m-0 ms-1">{{ $project->type ? $project->type->type : 'Senza tipo' }}</p>
            </div>
            <div class="col-6 mt-4">
                <h5 class="fw-bold">Descrizione:</h5>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection