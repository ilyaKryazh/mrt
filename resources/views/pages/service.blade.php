@extends('layouts.app')
@section('content')
<section class="section">
    {{Breadcrumbs::render('seconds', (object)['name' => 'Сервис'])}}
  </section>
  <section class="section">
    <div class="content-container">
      <h1>Сервис</h1>
      <div class="grid grid_ratio_4"><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Криосервис</h3>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Радиочастотная клетка</h3>
          </div></a><a class="card card_short-image" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Ремонт радиочастотных катушек</h3>
          </div></a>
      </div>
    </div>
  </section>
  <section class="section section_has-bg">
    <div class="content-container">
      <h2 class="section__title">Техническое обслуживание и ремонт</h2>
      <div class="grid grid_ratio_3"><a class="card card_with-icon card_visual-left" href="#0">
          <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <p class="card__text">Диагностика и ремонт МРТ-оборудования</p>
          </div></a><a class="card card_with-icon card_visual-left" href="#0">
          <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <p class="card__text">Настройка программного обеспечения</p>
          </div></a><a class="card card_with-icon card_visual-left" href="#0">
          <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <p class="card__text">Ремонт систем охлаждения, чиллера, вентиляции, электрики;</p>
          </div></a><a class="card card_with-icon card_visual-left" href="#0">
          <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <p class="card__text">Профилактический осмотр и составление рекомендаций</p>
          </div></a><a class="card card_with-icon card_visual-left" href="#0">
          <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <p class="card__text">Подбор и поставка необходимых запчастей</p>
          </div></a><a class="card card_with-icon card_visual-left" href="#0">
          <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
          </div>
          <div class="card__body card__body_text-center">
            <p class="card__text">Захолаживание криостата</p>
          </div></a>
      </div>
    </div>
@endsection
