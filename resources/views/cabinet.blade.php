<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Мероприятие</title>
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
<div class="liinks">
    <a href="{{route('addShow')}}">Добавить мероприятие</a>
</div>
<!--footer-->
<footer class="footer">
    <div class="container">
        <p class="text-muted">Footer information</p>
    </div>
</footer>
</body>
</html>