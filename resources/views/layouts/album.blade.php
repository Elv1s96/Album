@extends('layouts.app')
@section('title-block')Альбом @endsection
@section('content')
    @guest
        Надо войти для просмотра этой страницы
    @endguest
    @auth
        <form method="GET" action="{{ route("show_by_category") }}">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="submit">Отфильтровать по категории</button>
                </div>
                <select class="custom-select" id="name" name="name">
                    @foreach($category as $cat)

                        <option value="{{ $cat->name }}" id="name" name="name">{{ $cat->name }}</option>

                    @endforeach
                </select>
                <div class="col-sm-6 col-md-3">
                    <a href="{{ route('album.index') }}" class="btn btn-outline-secondary">Сбросить фильтер</a>
                </div>
            </div>
        </form>

{{--    <form method="GET" action="{{ route("show_by_category") }}">--}}
{{--        <div class="filters">--}}
{{--            <div class="col-sm-6 col-md-3">--}}
{{--                <div class="filters row">--}}
{{--                    <div class="col-sm-6 col-md-3">--}}
{{--                        <label for="category_filter">Категория--}}
{{--                            <input type="text" name="category_filter" id="category_filter" size="6" value="{{ request()->category_filter}}">--}}
{{--                        </label>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-md-3">--}}
{{--            <button type="submit" class="btn btn-primary">Отфильтровать по категории</button>--}}
{{--        </div>--}}
{{--    </form>--}}
    <div class="row">





    @foreach($photos as $photo)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

                <a href="{{ route('album.show', $photo) }}"><img src="{{ Storage::url($photo->image) }}" class=" img-thumbnail" height="700px" alt="iPhone X"></a>
                <div class="card-body">
                    <h3 style="font-size:20px">Название: {{ $photo->name }}</h3>
                    <h3 style="font-size:20px">Категория: @isset($photo->category->name) {{ $photo->category->name }} @endisset</h3>

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

        <div class="container">
            {{ $photos->links() }}
            <a href="/album/create"><button class="btn btn-success">Загрузить фотографию</button></a>

        </div>
    @endauth
@endsection
