@extends('layouts.app')
@section('title-block')Contact @endsection
@section('content')
    <h1>Отправка емеила</h1>
<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Введите Email</label>
        <input type="text" name="email" placeholder="введите email" id="email" class="form-control">
    </div>
   <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea type="text" name="message" placeholder="введите сообщение" id="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
