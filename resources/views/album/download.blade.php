@extends('layouts.app')
@section('title-block')Загрузка фотографий @endsection
@section('content')
{{--    @if ($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <div class="col-sm-6">--}}
{{--                <div class="alert alert-danger">{{ $error }}</div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--        @endif--}}
{{--    @error('name')--}}
{{--    <div class="col-sm-6">--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--    </div>--}}
{{--    @enderror--}}

{{--    @error('album_category')--}}
{{--    <div class="col-sm-6">--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--    </div>--}}
{{--    @enderror--}}

    <form method="POST" enctype="multipart/form-data" action="{{ route('album.store') }}">
        @csrf
        <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Название картинки: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Категория картинки: </label>

            <select class="custom-select col-sm-6" id="category_id" name="category_id" style="margin-left:15px;">
                @foreach($categories as $category)

                    <option   value="{{ $category->id }} " name="category_id" id="category_id">{{ $category->name }}</option>

                @endforeach
            </select>
        </div>
        <div class="input-group row">
            <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
            <div class="col-sm-10">
                <label class="btn btn-danger btn-file">
                    Загрузить <input type="file" style="display: none;" name="image" id="image">
                </label>
            </div>
        </div>
        <button class="btn btn-success">Сохранить</button>
    </form>
@endsection
