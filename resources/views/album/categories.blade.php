@extends('layouts.app')
@section('title-block')Категории @endsection
@section('content')
    @guest
        Надо войти для просмотра этой страницы
    @endguest
    @auth
<div class="col-md-12">
    <h1>Категории</h1>
    <table class="table">
        <tbody>
        <tr>
            <th>
                #
            </th>
            <th>
                имя
            </th>
            <th>
               Код
            </th>

        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->code }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
{{--                            <a class="btn btn-success" type="button" href="{{ route('category.show', $category) }}">Открыть</a>--}}
                            <a class="btn btn-warning" type="button" href="{{ route('category.edit', $category) }}">Редактировать</a>
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Удалить"></form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" type="button"
       href=" {{ route('category.create') }} ">Добавить категорию</a>
</div>
    @endauth
@endsection
