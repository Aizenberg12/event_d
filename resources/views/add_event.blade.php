<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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
            <a class="navbar-brand" href="#">LOGO</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{route('homeShow')}}">Главная</a></li>
                <li><a href="{{route('cabinetShow')}}">Кабинет</a></li>
                <li><a href="#">Выйти</a></li>
                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--Навигация-->
<div class="container-fluid" style="margin-top: 70px">
                <ul class="nav nav-tabs">
                    <li class="active"><a id="start_information_b" href="#">Общая информация</a></li>
                    <li ><a id="event_registration_b" href="#">Регистрация</a></li>
                    <li><a id="organizers_b" href="#">Организаторы и спонсоры</a></li>
                    <li><a id="program_spek_b" href="#">Программа и спикеры</a></li>
                </ul>
            </div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="container-fluid">
            <form>
                <div class="container-fluid">
                <!--Форма 1-->
                <div id="start_information">
                    <h3>Общая информация</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Название</label>
                        <input type="text" name="name"  class="form-control">
                            </div>
                        <div class="form-group">
                        <label for="">Тип</label>
                        <select name="type" class="form-control">
                            <option value="1" >1</option>
                            <option value="2"> 2</option>
                        </select>
                            </div>
                        <div>
                            <label for="">Загрузить изображение</label>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="...">
                        </a>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Тематика</label>
                        <select name="theme" class="form-control">
                            <option value="1">1</option>
                            <option value="2"> 2</option>
                        </select>
                            </div>
                        <div class="form-group">
                            <label for="">Дата</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Время начала</label>
                            <input type="time" name="start_time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Время окончания</label>
                            <input type="time" name="start_end" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Стоимость</label>
                            <input type="text" name="cost" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                    </div>
                </div>

                <!--Форма 2-->
                <div id="event_registration" style="display: none;">
                    <h3>Тип регистрации</h3>
                    <select name="type_registration">
                        <option value="Не требуется">Не требуется</option>
                        <option value="Не требуется">Не требуется</option>
                        <option value="Не требуется">Не требуется</option>

                    </select>
                    <input type="date">

                </div>

                <!--Форма 3-->
                <div id="organizers" style="display: none;">
                    <div class="organizer">
                        <input type="text" name="name">
                        <input type="text" name="link">
                        <input type="text" name="description">
                    </div>
                    <div class="sponsor">
                        <input type="text" name="name">
                        <input type="text" name="link">
                        <input type="text" name="description">
                        <input type="text" name="status">
                    </div>
                    <div class="soorganizer">
                        <input type="text" name="name">
                        <input type="text" name="link">
                        <input type="text" name="description">
                    </div>
                    <div class="partner">
                        <input type="text" name="name">
                        <input type="text" name="link">
                        <input type="text" name="description">
                        <input type="text" name="status">
                    </div>

                </div>

                <!--Форма 4-->
                <div id="program_spek" style="display: none;">
                    <h3>Программа и Спикеры</h3>
                    <input type="text" name="speker">
                    <input type="text" name="program">
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('js/form.js')}}"></script>
</body>
</html>