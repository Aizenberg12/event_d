@extends('layouts.app')

@section('content')
<div class="header">
  <div class="container">
    <div class="carousel-caption">
      <h1>Make Event</h1>
      <p>Краудфандинговая площадка для организации и проведения мероприятий</p>
      <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Зарегистрируйтесь сейчас</a></p>
    </div>
  </div>
</div>

<div class="container marketing">

<!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="img/1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Что нибудь</h2>
            <p>1 аргумент</p>

        </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img/2.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Что нибудь</h2>
        <p>2 аргумент</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img/3.png" alt="Generic placeholder image" width="140" height="140">
        <h2>Что нибудь</h2>
        <p>3 аргумент</p>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Make Event <span class="text-muted">Это удобно</span></h2>
            <p class="lead">Не нужно тратить время на...</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="/img/land2.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Наши преимущества<span class="text-muted">Оцените сами</span></h2>
            <p class="lead">Бла бла бла</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="/img/land1.jpg"  alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">И наконец <span class="text-muted"></span></h2>
            <p class="lead"> Бла бла бла </p>
          <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Зарегистрируйтесь</a></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="/img/land3.jpg" alt="Generic placeholder image">

        </div>
    </div>

    <hr class="featurette-divider">




</div><!-- /.container -->
<div class="hFooter"></div>
@endsection