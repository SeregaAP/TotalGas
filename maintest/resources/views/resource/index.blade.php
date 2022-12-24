@extends('layouts.managerlayout')

@section('content')
    <div class="resource_index">
        @foreach ($resources as $resource)
            <div class="alert alert-secondary resource_index-itm">
                <p>{{ $resource->title }}</p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('resimg',$resource->id) }}" type="button" class="btn btn-index">Подробнее</a>
                    <button type="button" class="btn btn-index">Редактировать</button>
                    <button type="button" class="btn btn-index">Удалить</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection