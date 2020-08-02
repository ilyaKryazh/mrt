@extends('layouts.app')
@section('content')
<section class="section">
    <div class="content-container">
      <div class="breadcrumbs"><a class="breadcrumbs__item" href="#0">Главная</a><a class="breadcrumbs__item">Гелий</a></div>
    </div>
  </section>
  <section class="section">
    <div class="content-container textual">
      <h1>Гелий</h1>
      <p class="section__text-intro">ООО «НПО РТИ» производит и реализует жидкий гелий ТУ 51-224-84.</p>
      <ul>
        <li>Жидкий гелий по запросу</li>
        <li>Газообразный гелий «марки А»  — по запросу</li>
        <li>Услуга заправки МРТ 40 000 рублей</li>
      </ul>
    </div>
    <div class="content-block">
      <div class="content-container">
        <h2>Заправка МРТ жидким гелием включает в себя:</h2>
        <div class="grid grid_ratio_3"><a class="card card_short-image card_with-icon" href="#0">
            <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
            </div>
            <div class="card__body card__body_text-center">
              <p class="card__text">Предоставление сосуда Дьюара для транспортировки гелия к томографу</p>
            </div></a><a class="card card_short-image card_with-icon" href="#0">
            <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
            </div>
            <div class="card__body card__body_text-center">
              <p class="card__text">Транспортные услуги по доставке жидкого гелия и возврату тары</p>
            </div></a><a class="card card_short-image card_with-icon" href="#0">
            <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
            </div>
            <div class="card__body card__body_text-center">
              <p class="card__text">Заправка криостатов жидким гелием</p>
            </div></a>
        </div>
      </div>
    </div>
    <div class="content-block content-block_has-bg">
      <div class="content-container">
        <p class="text-color_accent">ООО «НПО РТИ» обладает собственным производством по ожижению гелия в Москве, включающим в себя:</p>
        <ul>
          <li>Криогенную гелиевую установку</li>
          <li>Хранилища газообразного гелия</li>
          <li>Компрессорную установку по заполнению баллонов сжатым газообразным гелием</li>
          <li>Новейшее точное весовое оборудование, лабораторию проверки качества</li>
          <li>Большие складские площади и спецавтотранспорт</li>
        </ul>
      </div>
    </div>
    <div class="content-block">
      <div class="content-container layout layout_screen-tablet_60-40">
        <div>
          <h2>Сосуд Дьюара</h2>
          <p>Наша компания обладает собственным парком сосудов Дьюара объемом 250 литров серии CMSH производства «Cryofab» (США), которые созданы для хранения, транспортировки и использования жидкого гелия с минимальными потерями. В сосудах серии CMSH применяется самая современная технология охлаждаемого парами гелия многослойного экрана в сочетании с вакуумной суперизоляцией.</p>
          <p>Это позволяет гарантированно обеспечить наименьшие в отрасли, в сравнении с сосудами других производителей, потери жидкого гелия, примерно, 1% в сутки.</p>
        </div>
        <div><img src="/assets/img/demo-image.jpg" alt=""></div>
      </div>
    </div>
  </section>
@endsection
