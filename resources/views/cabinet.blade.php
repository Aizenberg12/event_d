@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-1t">
        <div class="container-fluid">
            <h3>Кабинет</h3>
            <div class="panel panel-default">
                <div class="panel-heading"><h5>Личные данные</h5></div>
                <ul type="none">
                    <li> <lable>Фимилия:</lable> Иванов</li>
                    <li> <lable>Имя:</lable> Иван</li>
                    <li> <lable>Имя пользователя:</lable> Ivan1546</li>
                </ul>
             </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h5>Контактная информация</h5></div>
                <ul type="none">

                    <li> <lable>E-mail:</lable> Ivan@gmail.com</li>
                    <li> <lable>Телефон:</lable> 89287654980</li>
                    <li> <lable>Ссылка на внешний ресурс:</lable> <a href="https://vk.com/erythroxylum_s"></a> </li>
                </ul>
            </div>

        </div>
    </div>

</div>

<div class="container">
<div class="liinks">
    <a  class="btn btn-primary" href="{{route('addShow')}}"> Создать мероприятие <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

</div>
</div>

@endsection