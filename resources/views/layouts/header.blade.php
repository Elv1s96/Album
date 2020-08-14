<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{route('home')}}">Egor`s Site</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
{{--        <a class="p-2 text-dark" href="{{route('banner')}}">Banner</a>--}}
        <a class="p-2 text-dark" href="{{route('contact')}}">Отпарвить емеил</a>
        <a class="p-2 text-dark" href="{{route('album.index')}}">Альбом</a>
        <a class="p-2 text-dark" href="{{route('category.index')}}">Категории</a>
    </nav>
    @guest
    <a class="btn btn-outline-primary" href="{{ route('login') }}">Войти</a>
    <a style="margin-left:10px;" class="btn btn-outline-primary" href="{{ route('register') }}">Зарегистрироваться</a>
    @endguest
    @auth
        {{ Auth::user()->name }}
    <a style="margin-left:10px;" class="btn btn-outline-primary" href="{{ route('get-logout') }}">Выйти</a>
    @endauth
</div>
