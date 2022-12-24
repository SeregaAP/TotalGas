@extends('layouts.managerlayout')

@section('content')
    <div class="resource_create">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('errors'))
            <div class="alert alert-danger">{{ session('errors') }}</div>
        @endif
        <form action="{{ route('resource.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название ресурса</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="название">
            </div>
            <button type="submit" class="btn-all">Добавить</button>
        </form>
    </div>
@endsection