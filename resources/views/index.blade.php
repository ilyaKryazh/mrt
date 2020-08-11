@extends('layouts.app')
@section('content')
    <section class="main-hero" style="background-image: url('/assets/img/main-hero-bg.jpg')">
      <div class="main-hero__inner content-container">
        <h1 class="main-hero__caption">Профессионалы<br>в области МРТ и КТ</h1>
      </div>
    </section>
    <section class="section">
      <div class="content-container">
        <h2 class="section__title">Бизнес</h2>
        <p class="section__text-intro">Широкое разнообразие спектра исследований, растущий клиентский спрос и высокий средний чек обеспечивают привлекательный индекс ROI инвестиций в открытие МРТ-центра.</p>
        <div class="layout layout_screen-tablet_50-50">
          <div class="section__part"><img src="/assets/img/demo-image.jpg" alt=""></div>
          <div class="section__part">
            <div class="section__text-block">
              <p>Сегодня наблюдается растущий потребительский спрос на высокотехнологичные медицинские услуги, гарантирующие отображение наиболее полной и реальной картины состояния человеческого организма. В том числе растет спрос на услуги магнитно-резонансной томографии, рынок которой в России и странах СНГ пока не насыщен.</p>
            </div>
            <button class="btn btn_primary btn_adaptive" type="button" onclick="location.href='/business'">Про бизнес</button>
          </div>
        </div>
      </div>
    </section>
    <section class="section section_has-bg">
      <div class="content-container">
        <h2 class="section__title">Сервис</h2>
        <div class="layout layout_row_auto">
          <div class="advantages">
            <div class="advantages__header">
              <h3 class="advantages__message">Мы производим и реализуем жидкий гелий</h3>
              <div class="advantages__button-link">
                <button class="btn btn_primary btn_full" type="button" onclick="location.href='/helium'">Про гелий</button>
              </div>
            </div>
            <div class="advantages__body">
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
          <div class="advantages">
            <div class="advantages__header">
              <h3 class="advantages__message">Устранение неполадок любой сложности!</h3>
              <div class="advantages__button-link">
                <button class="btn btn_primary btn_full" type="button" onclick="location.href='/service'">Про сервис</button>
              </div>
            </div>
            <div class="advantages__body">
              <div class="grid grid_ratio_3"><a class="card card_short-image card_with-icon" href="#0">
                  <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
                  </div>
                  <div class="card__body card__body_text-center">
                    <p class="card__text">Ремонт производится высококвалифицированными инженерами</p>
                  </div></a><a class="card card_short-image card_with-icon" href="#0">
                  <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
                  </div>
                  <div class="card__body card__body_text-center">
                    <p class="card__text">Выезд по России и в страны СНГ</p>
                  </div></a><a class="card card_short-image card_with-icon" href="#0">
                  <div class="card__visual"><img class="card__icon" src="/assets/img/demo-icon.svg" alt=""/>
                  </div>
                  <div class="card__body card__body_text-center">
                    <p class="card__text">Оперативное и качественное  техническое обслуживание</p>
                  </div></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="content-container">
        <h2 class="section__title section__title_center">О компании</h2>
        <p class="section__text-intro">Научно-производственное объединение РТИ — высокотехнологичная компания, являющаяся экспертом в отрасли магнитно-резонасных томографов</p>
        <div class="layout layout_screen-tablet_50-50">
          <div class="section__part">
            <div class="section__text-block">
              <p class="section__text-intro">Мы предлагаем комплексные решения:</p>
              <ul>
                <li>Монтаж, сервисное обслуживание, продажа МРТ и всей инфраструктуры, необходимой для его эксплуатации.</li>
                <li>Оснащение МРТ-кабинета «под ключ».</li>
                <li>Создание диагностического МРТ-центра «под ключ»: от разработки ТЭО инвестиционного проекта до открытия клиники.</li>
              </ul>
            </div>
            <button class="btn btn_primary btn_adaptive" type="button" onclick="location.href='/business'">Про бизнес</button>
          </div>
          <div class="section__part"><img src="/assets/img/demo-image.jpg" alt=""></div>
        </div>
      </div>
    </section>
@endsection
