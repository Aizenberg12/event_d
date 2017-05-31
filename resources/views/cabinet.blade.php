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
            <a class="navbar-brand" href="#">LOGO</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('homeShow')}}">Главная</a></li>
                <li class="active"><a href="{{route('cabinetShow')}}">Кабинет</a></li>
                <li><a href="#">Выйти</a></li>
                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="container-fluid">
            <h3>Кабинет</h3>
            <div class="panel panel-default">
                <div class="panel-heading">Личные данные</div>
                <ul type="none">
                    <lable>Имя:</lable>
                    <li></li>
                    <lable>Фимилия:</lable>
                    <li></li>
                    <lable>Имя пользователя:</lable>
                    <li></li>
                </ul>
             </div>



            <div class="panel panel-default">
                <div class="panel-heading">Контактная информация</div>
                <ul type="none">
                    <lable>E-mail:</lable>
                    <li></li>
                    <lable>Телефон:</lable>
                    <li></li>
                    <lable>Ссылка на внешний ресурс:</lable>
                    <li></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="container">
<div class="liinks">
    <a href="{{route('addShow')}}">Добавить мероприятие</a>
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