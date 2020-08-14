@extends('layouts.app')
@section('title-block')Banners @endsection
@section('content')
    <h1>Banners</h1>
    <div class="wrapper">
        <div class="box box1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSoVewKNuiN5yS-Qd_QXiuYnB3I_eaMeLliDKpvIf43HOtfv6wa"></div>
        <div class="box box2">Box 2</div>
        <div class="box box3">Box 3</div>
        <div class="box box4">Box 4</div>
        <div class="box box5">Box 5</div>
        <div class="box box6">Box 6</div>
        <div class="box box7">Box 7</div>
    </div>
@endsection
<style>
    .wrapper {
        display: grid;
        /*grid-template-columns: 70% 30%;*/
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 1em;
        grid-auto-rows: minmax(200px, auto);

    }

    .wrapper > div {
        padding: 1em;
        background-color: #ee6375;
    }

    .wrapper > div.light {
        padding: 1em;
        background-color: #eec6cb
    }

    .box1 {
        grid-column: 1/3;
        grid-row: 1/4;
    }

    .box2 {

    }

    .box3 {

    }

    .box5 {
        grid-column: 2/4;
    }.box6 {
        grid-row: 3/4;
    }
</style>
