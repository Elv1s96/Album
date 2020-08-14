@extends('layouts.app')
@section('title-block')Фоточка @endsection
@section('content')
    <div class="col-sm-6 col-md-6 mx-auto d-block">
        <div class="thumbnail">

            <img src="{{ Storage::url($album->image) }}" class="img-fluid img-thumbnail" width="600" height="800" alt="iPhone X">
            <div class="form-group">
                <h3>Название: {{ $album->name }}</h3>
                <h3>Категория:{{ $album->album_category_name }}</h3>
            </div>
            <form action="{{ route('album.destroy', $album) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-outline-success" type="button" href="{{ route('album.edit', $album) }}">Редактировать</a>
                <input class="btn btn-outline-danger" type="submit" value="Удалить">
            </form>
        </div>
    </div>
    @endsection
