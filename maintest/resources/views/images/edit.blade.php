@extends('layouts.managerlayout')

@section('content')
    <div class="image_edit">
        <div class="image_edit-form">
            <img src="{{ $image->title }}" alt="">
            <p>{{ $resource->title }}</p>
        </div>
        <div class="image_edit-galery">
            <div class="mage_edit-galery-form">
                <div class="mage_edit-galery-form-header">
                    <h5>Загрузить изоброжение</h5>
                </div>
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3 d-flex">
                        <input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
                        <button class="btn btn-default" type="submit">Загрузка</button>
                    </div>
                </form>
            </div>
            <div class="image_edit-galery-grid">
                @foreach ($imagesall as $img)
                    <div class="image_edit-galery-grid-itm">
                        <img src="{{ $img->title }}" alt="">
                        <div class="image_edit-galery-grid-itm-form">
                            <form method="POST" action="{{ route('updateResImg',[$resource->id,$image->id,$img->id])}}">
                                @csrf
                                <button type="submit" class="btn-all">загрузить</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection