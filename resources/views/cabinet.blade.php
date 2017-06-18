@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-2 col-md-offset-1 header-cab">
            <h3>Кабинет</h3>
        </div>    
    </div>
    <div class="row">
            <div class="col-md-8 col-md-offset-1">
            <h4 >Мои мероприятия:</h4>
            @foreach($events as $event)
                <div class="media">
                    <a class="pull-left" href="{{ route('eventShow', ['id' => $event->id]) }}">
                        <img class="media-object" src="{{asset($event->event_image)}}" alt="...">
                    </a>
                    <div class="media-body">
                        <div class='vevent'>
                            <p>
                            <h3>
                                <a class="summary" data-pjax-full="true" href="{{ route('eventShow', ['id' => $event->id]) }}">{{$event->event_name}}</a>
                            </h3>
                            <span class='dtstart' title='2017-05-16'>
                                {{$event->event_date}}
                            </span>
                            <span class='location'>
                                <a>{{$event->event_address}}</a>
                            </span>
                            <span class='category'>
                            <a href='/it-vstrecha'>
                                {{$event->event_type}}
                            </a>
                            </span>
                            </p>
                                <a class='icon_event_vip' href='#'></a>
                            <p>
                                <a href="/companies/42">{{$event->organizer}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        <div class="col-md-3">
            <div class="container-fluid">

                    <div class=""><h5>Личные данные</h5></div>
                    <ul type="none">
                        <li> <lable>Фимилия:</lable> {{$user_info->last_name}}</li>
                        <li> <lable>Имя:</lable> {{$user_info->first_name}}</li>
                        <li> <lable>Имя пользователя:</lable> {{$user_info->name}}</li>
                    </ul>

                    <h5>Контактная информация</h5>
                    <ul type="none">

                        <li> <lable>E-mail:</lable> {{$user_info->email}}</li>
                        <li> <lable>Телефон:</lable> {{$user_info->phone}}</li>
                        <li> <lable>Ссылка на внешний ресурс:</lable> {{$user_info->user_link}} </li>
                    </ul>
                
            </div>
            <div class="liinks">
                <a  class="btn btn-primary" href="{{route('addShow')}}"> Создать мероприятие <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="hFooter"></div>

@endsection