@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 20px">
                <ul class="nav nav-tabs">
                    <li id="1" class="active"><a id="start_information_b" href="#">Пользователи</a></li>
                    <li id="2" ><a id="event_registration_b" href="#">Мероприятия</a></li>
                </ul>
            </div>
        <script>tinymce.init({ selector:'textarea' });</script>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="container-fluid">
            <form action="" method="POST"  enctype="multipart/form-data" >
                            {{csrf_field()}}
                <div class="container-fluid">
                <!--Форма 1-->
                <div id="start_information">
                    <div class="panel panel-default" style="margin-top: 25px;">
                        <div class="panel-heading">Список статей</div>
                        <table id="admin_table" class="table" >
                            <tr>
                                <th>#</th>
                                <th>Логин</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>E-mail</th>
                                <th>Номер</th>
                                <th></th>
                                <th></th>

                            </tr>
                            @forEach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        <!-- <a href="">Редактировать</a> -->
                                    </td>
                                    <td>
                                        <a href="{{route('user_delete', ['id' => $user->id])}}">Удалить</a>
                                    </td>
                                </tr>
                            @endforeach
                            
<!--                             <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> -->
                        </table>
                    </div>
                </div>

                <!--Форма 2-->
                <div id="event_registration" style="display: none;">
                    <div class="panel panel-default" style="margin-top: 25px;">
                        <div class="panel-heading">Список статей</div>
                        <table id="admin_table" class="table" >
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Дата проведения</th>
                                <th>User id</th>
                                <th></th>
                                <th></th>

                            </tr>
                            @forEach($events as $event)
                                <tr>
                                    <td>{{$event->id}}</td>
                                    <td>{{$event->event_name}}</td>
                                    <td>{{$event->event_date}}</td>
                                    <td>{{$event->user_id}}</td>
                                    <td>
                                        <a href="{{route('event_edit', ['id' => $event->id])}}">Редактировать</a>
                                    </td>
                                    <td>
                                        <a href="{{route('event_delete', ['id' => $event->id])}}">Удалить</a>
                                    </td>
                                </tr>
                            @endforeach
                            
<!--                             <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> -->
                        </table>
                    </div>
                </div>

                </div>
            </form>
        </div>
    </div>
</div>
<div class="hFooter"></div>

@endsection