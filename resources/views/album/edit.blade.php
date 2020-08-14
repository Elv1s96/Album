@extends('layouts.app')
@section('title-block')Альбом @endsection
@section('content')
    <div class="col-sm-6 col-md-4 mx-auto d-block">
        <div class="thumbnail">
            <img src="{{ Storage::url($album->image) }}" class="img-fluid img-thumbnail" width="600" height="800" alt="iPhone X">

            <form method="POST" enctype="multipart/form-data" action="{{ route('album.update', $album) }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Название картинки:</label>

                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name',isset($album) ? $album->name : null) }}">


                </div>
                <div class="form-group">
                    <label for="name">Категория картинки:</label>
{{--                        <input type="text" class="form-control" name="album_category_name" id="album_category_name" value="{{ old('album_category_name',isset($album) ? $album->album_category_name : null) }}">--}}
                    <select class="custom-select" id="category_id" name="category_id">
                        @foreach($categories as $category)

                            <option  @if($category->id == $album->category_id) selected @endif value="{{ $category->id }} " name="category_id" id="category_id">{{ $category->name }}</option>

                        @endforeach
                    </select>
                </div>
{{--                @foreach($categories as $category)--}}
{{--                <div class="form-check">--}}
{{--                    <input type="checkbox" class="form-check-input" name="{{ $category->code }}" id="{{ $category->name }}" @if($category->id == $album->category_id) checked @endif value="{{ $category->id }}">--}}
{{--                    <label class="form-check-label" for="{{ $category->id }}">{{ $category->name }}</label>--}}
{{--                </div>--}}
{{--                @endforeach--}}
                <label class="btn btn-outline-primary" style="margin-top:5px;">
                    Загрузить новую картинку <input type="file"  style="display: none;" name="image" id="image"   value="1" >
                </label>
                <button class="btn btn-outline-success">Сохранить</button>

            </form>


        </div>
    </div>
@endsection
