@extends('layouts.app')

@section('content')
<!-- Поиск -->
@foreach($event as $ev)

@endforeach
@foreach($email as $em)

@endforeach
<!-- Отображение мероприятия -->
<div class="row" style="margin-top: 20px;">
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
                <li>Организатор: {{$ev->organ_name}}</li>
                <li>Адрес: {{$ev->event_address}}</li>
                <li>Дата проведения: {{$ev->event_date}}</li>
                <li>Время начала: {{$ev->time_start}} | Время окончания: {{$ev->time_end}}</li>
                <li>Стоимость: {{$ev->cost}}</li>
                <li>Регистрация: <a href=" {{$ev->type_registration}}">{{$ev->type_registration}}</a></li>

            </ul>
            <div class="send">
            <form method="get" action="{{route('send_email')}}">
                <input type="hidden" name="email" value="{{$em->email}}">
                <li><button class="btn btn-primary" value="">Связаться с организатором <span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
            </form>
            </div>
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
            <?=$ev->event_description?>
        </div>
        <div id="event_speeker" style="display: none;">
            <h2>Предложения</h2>
            <?=$ev->program_description?>
            <h2>Потребности</h2>
            <?=$ev->speker_description?>
        </div>
    </div>
</div>
<div class="hFooter"></div>
@endsection
