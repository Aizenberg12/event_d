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
            <div class="media">
                <a class="pull-left" href="">
                    <img class="media-object" src="" alt="...">
                </a>
                <div class="media-body">
                    <div class='vevent'>
                        <p>
                        <h3>
                            <a class="summary" data-pjax-full="true" href="">Какое-то мероприятие</a>
                        </h3>
                        <span class='dtstart' title='2017-05-16'>
                           27-08-1899
                        </span>
                        <span class='location'>
                            <a>Где-то проводится это</a>
                        </span>
                        <span class='category'>
                        <a href='/it-vstrecha'>
                            Категория такая-то
                        </a>
                        </span>
                        </p>
                            <a class='icon_event_vip' href='#'></a>
                        <p>
                            <a href="/companies/42">Компания</a>
                        </p>
                    </div>
                </div>   
            </div>  
            <div class="media">
                <a class="pull-left" href="">
                    <img class="media-object" src="" alt="...">
                </a>
                <div class="media-body">
                    <div class='vevent'>
                        <p>
                        <h3>
                            <a class="summary" data-pjax-full="true" href="">Какое-то мероприятие</a>
                        </h3>
                        <span class='dtstart' title='2017-05-16'>
                           27-08-1899
                        </span>
                        <span class='location'>
                            <a>Где-то проводится это</a>
                        </span>
                        <span class='category'>
                        <a href='/it-vstrecha'>
                            Категория такая-то
                        </a>
                        </span>
                        </p>
                            <a class='icon_event_vip' href='#'></a>
                        <p>
                            <a href="/companies/42">Компания</a>
                        </p>
                    </div>
                </div>   
            </div>  
            <div class="media">
                <a class="pull-left" href="">
                    <img class="media-object" src="" alt="...">
                </a>
                <div class="media-body">
                    <div class='vevent'>
                        <p>
                        <h3>
                            <a class="summary" data-pjax-full="true" href="">Какое-то мероприятие</a>
                        </h3>
                        <span class='dtstart' title='2017-05-16'>
                           27-08-1899
                        </span>
                        <span class='location'>
                            <a>Где-то проводится это</a>
                        </span>
                        <span class='category'>
                        <a href='/it-vstrecha'>
                            Категория такая-то
                        </a>
                        </span>
                        </p>
                            <a class='icon_event_vip' href='#'></a>
                        <p>
                            <a href="/companies/42">Компания</a>
                        </p>
                    </div>
                </div>   
            </div>  
            <div class="media">
                <a class="pull-left" href="">
                    <img class="media-object" src="" alt="...">
                </a>
                <div class="media-body">
                    <div class='vevent'>
                        <p>
                        <h3>
                            <a class="summary" data-pjax-full="true" href="">Какое-то мероприятие</a>
                        </h3>
                        <span class='dtstart' title='2017-05-16'>
                           27-08-1899
                        </span>
                        <span class='location'>
                            <a>Где-то проводится это</a>
                        </span>
                        <span class='category'>
                        <a href='/it-vstrecha'>
                            Категория такая-то
                        </a>
                        </span>
                        </p>
                            <a class='icon_event_vip' href='#'></a>
                        <p>
                            <a href="/companies/42">Компания</a>
                        </p>
                    </div>
                </div>   
            </div>  
        </div>
        <div class="col-md-3">
            <div class="container-fluid">

                    <div class=""><h5>Личные данные</h5></div>
                    <ul type="none">
                        <li> <lable>Фимилия:</lable> Иванов</li>
                        <li> <lable>Имя:</lable> Иван</li>
                        <li> <lable>Имя пользователя:</lable> Ivan1546</li>
                    </ul>

                    <h5>Контактная информация</h5>
                    <ul type="none">

                        <li> <lable>E-mail:</lable> Ivan@gmail.com</li>
                        <li> <lable>Телефон:</lable> 89287654980</li>
                        <li> <lable>Ссылка на внешний ресурс:</lable> <a href="https://vk.com/erythroxylum_s"></a> </li>
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