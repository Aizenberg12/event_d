@extends('layouts.app')

@section('content')
<!--Навигация-->
<div class="container-fluid" style="margin-top: 20px">
                <ul class="nav nav-tabs">
                    <li id="1" class="active"><a id="start_information_b" href="#">Общая информация</a></li>
                    <li id="2" ><a id="event_registration_b" href="#">Регистрация</a></li>
                    <li id="3"><a id="program_spek_b" href="#">Программа и спикеры</a></li>
                </ul>
            </div>
        <script>tinymce.init({ selector:'textarea' });</script>
<div class="row">
    <div class="col-md-10 col-md-offse
    t-1">
        <div class="container-fluid">
            <form action="{{route('addEvent')}}" method="POST"  enctype="multipart/form-data" >
                            {{csrf_field()}}
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
                            <label for="">Организатор</label>
                            <input type="text" name="organ_name" class="form-control">
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
                            <input type="file" name="event_image">
                            
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
                            <textarea name="event_description" class="form-control"></textarea>
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


                <!--Форма 4-->
                <div id="program_spek" style="display: none;">
                    <h3>Потребности и предложения</h3>
                    <div class="form-group col-md-6">
                        <label for="">Предложения</label>
                        <textarea name="speker_description" class="form-control"></textarea> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Потребности</label>
                        <textarea name="program_description" class="form-control"></textarea>
                    </div>
                <button type="submit" class="btn btn-primary">Создать</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="hFooter"></div>
@endsection