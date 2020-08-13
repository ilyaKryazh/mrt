@extends('layouts.app')
@section('content')
<section class="section">
    {{Breadcrumbs::render('seconds', (object)['name' => 'О компании'])}}
  </section>
  <section class="section">
    <div class="content-container">
      <div class="textual">
        <div class="textual__container">
          <h1>О компании</h1>
          <p><strong>Научно-производственное объединение РТИ — высокотехнологичная компания, являющаяся экспертом в отрасли магнитно-резонасных томографов</strong></p>
          <p><b>Мы предлагаем комплексные решения:</b></p>
          <ul>
            <li>Монтаж, сервисное обслуживание, продажа МРТ и всей инфраструктуры, необходимой для его эксплуатации.</li>
            <li>Оснащение МРТ-кабинета «под ключ».</li>
            <li>Создание диагностического МРТ-центра «под ключ»: от разработки ТЭО инвестиционного проекта до открытия клиники.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="content-container">
      <h2 class="section__title">Наши Преимущества</h2>
    </div>
    <div class="content-block content-block_border_bottom">
      <div class="content-container layout layout_screen-tablet_40-60">
        <h3 class="text-color_accent">Поставка аппарата МРТ «под ключ»</h3>
        <p>Заключив договор с нами, Вам не придется искать соисполнителей на другие участки работ — наша компания реализует всю цепочку: от доставки Вашего МРТ до монтажа и запуска томографа, а также последующего гарантийного обслуживания.</p>
      </div>
    </div>
    <div class="content-block content-block_border_bottom">
      <div class="content-container layout layout_screen-tablet_40-60">
        <h3 class="text-color_accent">Оснащение МРТ-кабинета «под ключ»</h3>
        <p>Весь цикл работ — от разработки проекта помещения до запуска томографа.</p>
      </div>
    </div>
    <div class="content-block">
      <div class="content-container layout layout_screen-tablet_40-60">
        <h3 class="text-color_accent">Открытие МРТ-центра «под ключ» </h3>
        <p>От разработки ТЭО инвестиционного проекта и бизнес-плана до запуска вашего диагностического центра.</p>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="content-container">
      <h2 class="section__title">Команда</h2>
      <div class="grid grid_ratio_4"><a class="card card_has-popup-btn" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-woman.jpg" alt=""/>
            <div class="card__ghost-btn">
              <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
            </div>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Субботина Кристина</h3>
            <p class="card__text">Менеджер по работе с клиентами</p>
          </div></a><a class="card card_has-popup-btn" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-woman.jpg" alt=""/>
            <div class="card__ghost-btn">
              <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
            </div>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Субботина Кристина</h3>
            <p class="card__text">Менеджер по работе с клиентами</p>
          </div></a><a class="card card_has-popup-btn" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-woman.jpg" alt=""/>
            <div class="card__ghost-btn">
              <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
            </div>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Субботина Кристина</h3>
            <p class="card__text">Менеджер по работе с клиентами</p>
          </div></a><a class="card card_has-popup-btn" href="#0">
          <div class="card__visual"><img class="card__image" src="/assets/img/demo-woman.jpg" alt=""/>
            <div class="card__ghost-btn">
              <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
            </div>
          </div>
          <div class="card__body card__body_text-center">
            <h3 class="card__title card__title_text-upper" href="#0">Субботина Кристина</h3>
            <p class="card__text">Менеджер по работе с клиентами</p>
          </div></a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="content-container">
      <h2 class="section__title">Документы</h2>
      <div class="grid grid_ratio_6"><img src="/assets/img/demo-document.png" alt=""><img src="/assets/img/demo-document.png" alt=""><img src="/assets/img/demo-document.png" alt=""><img src="/assets/img/demo-document.png" alt=""><img src="/assets/img/demo-document.png" alt=""><img src="/assets/img/demo-document.png" alt=""></div>
    </div>
  </section>
@endsection
