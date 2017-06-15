@extends('layouts.app')

@section('content')
<!--Навигация-->
<div class="container-fluid" style="margin-top: 20px">
                <ul class="nav nav-tabs">
                    <li id="1" class="active"><a id="start_information_b" href="#">Общая информация</a></li>
                    <li id="2" ><a id="event_registration_b" href="#">Регистрация</a></li>
                    <li id="3"><a id="organizers_b" href="#">Организаторы и спонсоры</a></li>
                    <li id="4"><a id="program_spek_b" href="#">Программа и спикеры</a></li>
                </ul>
            </div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data" action="{{route('addEvent')}}">
                <div class="container-fluid">
                <!--Форма 1-->
                <div id="start_information">
                    <h3>Общая информация</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Название</label>
                        <input type="text" name="event_name" require class="form-control">
                            </div>
                        <div class="form-group">
                        <label for="">Тип</label>
                        <select name="event_type" class="form-control">
                            @foreach($event_type as $type)
                                <option value="{{$type->type}}">{{$type->type}}</option>
                            @endforeach
                        </select>
                            </div>
                        <div>
                            <label for="">Загрузить изображение</label>
                            <input type="file" neme="file">
                            
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Дата</label>
                            <input type="date" name="event_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Адрес</label>
                            <input type="text" name="event_address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ссылка</label>
                            <input type="text" name="event_link" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Время начала</label>
                            <input type="time" name="time_start" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Время окончания</label>
                            <input type="time" name="time_end" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Стоимость</label>
                            <input type="text" name="cost" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <input type="text" name="event_description" class="form-control">
                        </div>
                    </div>
                </div>

                <!--Форма 2-->
                <div id="event_registration" style="display: none;">
                    <h3>Тип регистрации</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Выберте тип регистрации</label>
                        <select name="type_registration" class="form-control">
                            <option>Свободный вход</option>
                            <option>Регистраци на внешнем ресурсе</option>
                            <option>Вход по приглашению</option>

                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Дата окончания регистрации</label>
                        <input type="date" name="date_end_registration" class="form-control">
                            </div>
                        <div class="form-group">
                            <label for="">Время окончания регистрации</label>
                            <input type="time" name="time_end_registration" class="form-control">
                        </div>
                    </div>
                </div>

                <!--Форма 3-->
                <div id="organizers" style="display: none;">
                    <div class="row">
                        <h3>Спонсоры и партнеры</h3>
                        <div class="col-md-6 organizer">
                            <h4>Организатор</h4>
                            <div class="form-group">
                                <label for="">Название</label>
                                <input type="text" name="organ_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ссылка</label>
                                <input type="text" name="organ_link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Описание</label>
                                <input type="text" name="organ_description" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 sponsor">
                            <h4>Спонсор</h4>
                            <div class="form-group">
                                <label for="">Название</label>
                                <input type="text" name="sponsor_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ссылка</label>
                                <input type="text" name="sponsor_link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Статус</label>
                                <input type="text" name="sponsor_status" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Описание</label>
                                <input type="text" name="sponsor_description" class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 soorganizer">
                            <h4>Соорганизатор</h4>
                            <div class="form-group">
                                <label for="">Назване</label>
                                <input type="text" name="soorgan_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ссылка</label>
                                <input type="text" name="soorgan_link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Описание</label>
                                <input type="text" name="soorgan_description" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 partner">
                            <h4>Партнер</h4>
                            <div class="form-group">
                                <label for="">Название</label>
                                <input type="text" name="partner_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ссылка</label>
                                <input type="text" name="partner_link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Статус</label>
                                <input type="text" name="partner_status" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Описание</label>
                                <input type="text" name="partner_description" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Форма 4-->
                <div id="program_spek" style="display: none;">
                    <h3>Программа и Спикеры</h3>
                    <div class="form-group col-md-6">
                        <label for="">Спикеры</label>
                        <input type="text" name="speker_description" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Программа</label>
                        <input type="text" name="program_description" class="form-control">
                    </div>
                <button class="btn btn-primary">Создать</button>
                </div>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>
<div class="hFooter"></div>
@endsection