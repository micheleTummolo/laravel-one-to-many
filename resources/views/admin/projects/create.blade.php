@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row my-4">
        <div calss="col-12">
            <h2 class="mb-4">Aggiungi un nuovo progetto</h2>
        </div>
        @if($errors->any())
        <div class="col-12">
                <div class="alert alert-danger">
                    <ul class="list-unstyled m-0">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
        </div>
        @endif
        <div class="col-12">
            <form action="{{ route('admin.projects.store') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="col-12">
                    <label class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" rows="8"></textarea>
                </div>
                
                <div class="col-12 mt-5">
                    <div class="button_container">
                        <button type="submit" class="btn btn-primary my_button hover_bg_light">Aggiungi progetto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection