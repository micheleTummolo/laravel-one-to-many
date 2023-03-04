@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-5 bg-white border_radius_50 table_container">
            <div class="col-12 d-flex justify-content-between">
                <div>
                    <h2 class="fw-bolder">{{ $project->name }}</h2>
                </div>
                <div>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.index') }}" role="button">Elenco progetti</a>
                </div>
            </div>
            <div class="col-12 mt-4 d-flex align-items-end">
                <h4 class="fw-bold m-0">Tipo:</h4>
                <p class="m-0 ms-1">{{ $project->type ? $project->type->type : 'Senza tipo' }}</p>
            </div>
            <div class="col-6 mt-4 border_dark border_radius_50 table_container">
                <h5 class="fw-bold">Descrizione:</h5>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection