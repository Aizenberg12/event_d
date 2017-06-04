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
            <a class="navbar-brand" href="{{route('homeShow')}}"><span class="glyphicon glyphicon-list-alt"></span> Make Event</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{route('homeShow')}}">Главная</a></li>
                <li><a href="{{route('cabinetShow')}}">Кабинет</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Поиск -->
<div class="row">
    <div class="container">
        <form class="navbar-form navbar-left" >
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Поиск">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        </form>
    </div>
</div>
<!-- Критерии поиска -->


<!-- Отображение мероприятия -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-9 col-sm-12">
             @foreach($events as $event)
                <div class="media">
                    <a class="pull-left" href="{{ route('eventShow', ['id' => $event->id]) }}">
                        <img class="media-object" src="{{asset($event->event_image)}}" alt="...">
                    </a>
                    <div class="media-body">
                        <div class='vevent'>
                            <p>
                            <h3>
                                <a class="summary" data-pjax-full="true" href="{{$event->event_link}}">{{$event->event_name}}</a>
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
        <div class="col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-heading">Категории</div>
                    <section id="accordion">
                        <div>
                            <input type="checkbox" id="check-1" />
                            <label for="check-1">Олимпиада</label>
                        </div>
                        <div>
                            <input type="checkbox" id="check-2" />
                            <label for="check-2">Конкурс</label>
                        </div>
                        <div>
                            <input type="checkbox" id="check-3" />
                            <label for="check-3">Форум</label>
                        </div>
                        <div>
                            <input type="checkbox" id="check-4" />
                            <label for="check-4">Хакатон</label>
                        </div>
                        <div>
                            <input type="checkbox" id="check-5" />
                            <label for="check-5">Мастер-класс</label>
                        </div>
                        <div>
                            <input type="checkbox" id="check-6" />
                            <label for="check-6">Выставка</label>
                        </div>
                    </section>
            </div>
            <a  class="btn btn-primary" href="{{route('addShow')}}"> Создать мероприятие <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
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
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>