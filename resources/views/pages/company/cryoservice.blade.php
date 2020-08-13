@extends('layouts.app')
@section('content')
<section class="section">
    {{Breadcrumbs::render('seconds', (object)['name' => 'Криосервис'])}}
  </section>
  <section class="section">
    <div class="content-container">
      <h1>Криосервис</h1>
      <div class="grid grid_ratio_3"><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">АДСОРБЕР</h3>
            <p class="card__text">Замена адсорбера гелиевого компрессора</p>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">ОХЛАЖДАЮЩАЯ ГОЛОВКА</h3>
            <p class="card__text">Охлаждающие головки Leybold и Sumitomo</p>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">ДИСПЛЕЙСЕР</h3>
            <p class="card__text">Дисплейсеры марок Leybold, Whisper и др.</p>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">ГАЗОВЫЕ МАГИСТРАЛИ</h3>
            <p class="card__text">Гелиевые магистрали различной длины</p>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">ЖИДКИЙ ГЕЛИЙ</h3>
            <p class="card__text">Поставка жидкого гелия. Заправка МРТ</p>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">ГЕЛИЕВЫЙ КОМПРЕССОР</h3>
            <p class="card__text">Новые и восстановленные компрессоры</p>
          </div></a>
      </div>
    </div>
  </section>
@endsection
