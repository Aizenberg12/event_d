@extends('layouts.app')

@section('content')
<div class="header">
  <div class="container">
    <div class="carousel-caption">
      <h1>Make Event</h1>
      <p>Краудфандинговая площадка для организации и&nbsp;проведения мероприятий</p>
      <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Зарегистрируйтесь сейчас</a></p>
    </div>
  </div>
</div>

<div class="container marketing">

<!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="img/1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Простое и&nbsp;понятное создание прототипа мероприятия</h2>
          

        </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img/2.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Поиск ресурсов для мероприятия</h2>
        

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img/3.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Реализация рекламных предложений и&nbsp;друих услуг</h2>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Make Event <span class="text-muted">Это удобно</span></h2>
            <p class="lead">Вы&nbsp;организатор мероприятия? В&nbsp;нашем сервисе вы&nbsp;можете создать анонс своего мероприятия, указать ресурсы, которых вам не&nbsp;хватает, предоставить возможности и&nbsp;услуги предлагаемые на&nbsp;своем мероприятии. </p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="/img/land2.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Нуждаетесь в&nbsp;рекламе или у&nbsp;вас есть идеи для мероприятий?</h2>
            <p class="lead">У&nbsp;нас множество мероприятий, предлагающих рекламные услуги и&nbsp;готовые к&nbsp;сотрудничеству, зарегистрируйтесь и&nbsp;получите доступ для связи с&nbsp;организаторами различных мероприятий.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="/img/land1.jpg"  alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">И&nbsp;наконец<span class="text-muted"></span></h2>
            <p class="lead">Make event позволяет управлять собственным мероприятием и&nbsp;анонсировать его только после того, как оно полностью готово.</p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Зарегистрируйтесь</a></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="/img/land3.jpg" alt="Generic placeholder image">

        </div>
    </div>
</div><!-- /.container -->
<div class="hFooter"></div>
@endsection