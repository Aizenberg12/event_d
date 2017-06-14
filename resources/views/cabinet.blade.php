<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
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
                <li><a href="{{route('homeShow')}}">Главная</a></li>
                <li class="active"><a href="{{route('cabinetShow')}}">Кабинет</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
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
<!--footer-->
<footer class="footer">
    <div class="container">
        <p class="text-muted">Footer information</p>
    </div>
</footer>
</body>
</html>