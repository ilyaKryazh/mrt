@extends('layouts.app')
@section('content')
<section class="section">
    <div class="content-container">
      <div class="breadcrumbs"><a class="breadcrumbs__item" href="#0">Главная</a><a class="breadcrumbs__item">Контакты</a></div>
    </div>
  </section>
  <section class="section">
    <div class="content-container">
      <h1>Контакты</h1>
      <h2 class="text-color_accent space_mb_l">НАУЧНО-ПРОИЗВОДСТВЕННОЕ ОБЪЕДИНЕНИЕ «РТИ»</h2>
      <div class="contacts">
        <div class="contacts__layout">
          <div class="contacts__block"><a class="contacts__contact-link" href="tel:+78001002970"><b>8 (800) 100 29 70</b></a>
            <p class="contacts__block-tagline">звонок по России бесплатный</p><a class="contacts__contact-link" href="tel:+74957607796">8 (495) 760 77 96</a>
          </div>
          <div class="contacts__block">
            <p class="contacts__block-title">Отдел продаж МРТ:</p><a class="contacts__contact-link" href="mailto:sales@mrtprofi.ru">sales@mrtprofi.ru</a>
          </div>
          <div class="contacts__block">
            <p class="contacts__block-title">Сервисный отдел:</p>
            <p class="contacts__block-tagline">ремонт МРТ, комплектующие, жидкий гелий</p><a class="contacts__contact-link" href="service@mrtprofi.ru">service@mrtprofi.ru</a>
          </div>
          <div class="contacts__block">
            <p class="contacts__block-title">Время работы:</p>
            <p>Пн-Пт, 08:00 — 18:00</p>
          </div>
          <div class="contacts__block">
            <p class="contacts__block-title">Наш адрес:</p>
            <p>Москва, Ленинский проспект, д. 53, строение 8</p>
          </div>
        </div>
        <div class="contacts__map"><img src="/assets/img/demo-yandex-map.png" alt=""></div>
      </div>
    </div>
  </section>
@endsection
