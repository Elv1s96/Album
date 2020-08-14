@extends('layouts.app')
@section('title-block')Конкретная категория @endsection
@section('content')
    <div class="row">
    @foreach($category->albums as $photo)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

                <a href="{{ route('album.show', $photo) }}"><img src="{{ Storage::url($photo->image) }}" class=" img-thumbnail" height="700px" alt="iPhone X"></a>
                <div class="card-body">
                    <h3 style="font-size:20px">Название: {{ $photo->name }}</h3>
                    <h3 style="font-size:20px">Категория: {{ $photo->album_category_name }}</h3>

                    <form action="{{ route('album.destroy', $photo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-success" type="button" href="{{ route('album.edit', $photo) }}">Редактировать</a>
                        <input class="btn btn-danger" type="submit" value="Удалить">
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
