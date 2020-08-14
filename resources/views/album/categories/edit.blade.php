@extends('layouts.app')
@section('title-block')Изменить категорию @endsection
@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('category.update', $category) }}">
        @method('PUT')
        <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Название категории: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
            </div>
        </div>
        <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Код категории: </label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="code" id="code" value="{{ $category->code }}">
            </div>
        </div>
        @csrf
        <button class="btn btn-success">Сохранить</button>
    </form>
@endsection
