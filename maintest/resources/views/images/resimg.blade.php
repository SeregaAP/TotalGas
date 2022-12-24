@extends('layouts.managerlayout')

@section('content')
    <div class="resource_index">
        @foreach ($images as $image)
            <div class="alert alert-secondary resource_index-itm">
                <img height="40" src="{{ $image->title }}" alt="">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('editImage',[$image->id,$resource->id]) }}" type="button" class="btn btn-index">Редактировать</a>
                    <button type="button" class="btn btn-index">Удалить</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection