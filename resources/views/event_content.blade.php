<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Event</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">


</head>
<body>
<!-- Шапка -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('homeShow')}}"><span class="glyphicon glyphicon-list-alt"></span> Make Event</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{route('homeShow')}}">Главная</a></li>
                <li><a href="{{route('cabinetShow')}}">Кабинет</a></li>

            </ul>
        </div>
    </div>
</div>
<!-- Поиск -->
@foreach($event as $ev)

@endforeach
<!-- Отображение мероприятия -->
<div class="row" style="margin-top: 70px">
    <div class="container">
        <div class="col-md-8">
            <div class="col-md-4">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{asset($ev->event_image)}}" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <ul type="none">
                    <li><h1>{{$ev->event_name}}</h1></li>
                    <li>{{$ev->event_type}}</li>
                    <li>Ссылка: <a href="{{$ev->event_link}}">{{$ev->event_link}}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4" style="border-left: 1px solid;">
            <ul type="none">
                <li>Адрес: {{$ev->event_address}}</li>
                <li>Дата проведения: {{$ev->event_date}}</li>
                <li>Время начала: {{$ev->time_start}} | Время окончания: {{$ev->time_end}}</li>
                <li>Стоимость: {{$ev->cost}}</li>
                <li>Регистрация: <a href=" {{$ev->type_registration}}">{{$ev->type_registration}}</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 50px">
    <div class="container">
        <ul class="nav nav-tabs">
            <li id="1" class="active"><a id="about_b" href="#">Анонс мероприятия</a></li>
            <li id="2" ><a id="event_speeker_b" href="#">Спикеры и программа</a></li>
        </ul>
    </div>
    <div class="container">
        <div id="about" style="">
            <h1>Описание</h1>
            <p>{{$ev->event_description}}</p>
        </div>
        <div id="event_speeker" style="display: none;">
            <h2>Программа</h2>
            <p>{{$ev->program_description}}</p>
            <h2>Спикеры</h2>
            <p>{{$ev->speker_description}}</p>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="footer">
    <div class="container">
        <p class="text-muted">Footer information</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('js/anons.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>