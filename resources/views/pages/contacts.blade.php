@extends('layouts.app')
@section('content')
<section class="section">
    {{Breadcrumbs::render('seconds', (object)['name' => 'Контакты'])}}
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
        <div class="contacts__map">
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?from=api-maps&ll=37.567220%2C55.697330&mode=usermaps&origin=jsapi_2_1_77&um=constructor%3A3mK7_4GCFb3dygXxdtvWsJgrkGRjO76u&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты — поиск мест и адресов, городской транспорт</a><iframe src="https://yandex.ru/map-widget/v1/-/CCQpvXreWA" width="1310px" height="450px" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
      </div>
    </div>
  </section>
@endsection
