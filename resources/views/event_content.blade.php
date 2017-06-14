@extends('layouts.app')

@section('content')
<!-- Поиск -->
@foreach($event as $ev)

@endforeach
<!-- Отображение мероприятия -->
<div class="row">
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
            <li id="1" class="active"><a id="about_b" href="#">Анонс мероприя</a></li>
            <li id="2" ><a id="event_speeker_b" href="#">Предложения и потребности</a></li>
        </ul>
    </div>
    <div class="container">
        <div id="about" style="">
            <h1>Описание</h1>
            <p>{{$ev->event_description}}</p>
        </div>
        <div id="event_speeker" style="display: none;">
            <h2>Предложения</h2>
            <p>{{$ev->program_description}}</p>
            <h2>Потребности</h2>
            <p>{{$ev->speker_description}}</p>
        </div>
    </div>
</div>
@endsection@extends('layouts.app')

@section('content')