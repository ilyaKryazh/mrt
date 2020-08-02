<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Главная страница</title>
    <meta name="description" content="Описание главной страницы">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="imagetoolbar" content="no">
    <meta name="msthemecompatible" content="no">
    <meta name="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="application-name" content="Главная страница">
    <meta name="msapplication-tooltip" content="Описание главной страницы">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="{{asset('styles/build.min.css')}}" rel="stylesheet">
  </head>
  <body class="page">
    <div class="page__inner">
      <header class="page__header">
        <div class="page__main-nav">
          <nav class="main-nav">
            <div class="main-nav__inner content-container"><a class="main-nav__logo" href="/"><img class="main-logo" src="/assets/img/logo.png" alt="Логотип" width="158" height="40"/></a>
              <div class="main-nav__menu js-main-menu">
                <div class="main-nav__menu-header">
                  <div class="main-nav__close-btn js-main-menu-close-btn">
                    <button class="btn btn_menu-toggle btn_close" type="button"><span class="visualli-hidden">Закрыть меню</span></button>
                  </div>
                </div>
                <ul class="main-menu js-dropdown-menu">
                  <li class="main-menu__item"><a class="main-menu__link" href="#0">О компании</a>
                    <div class="main-menu__sub">
                      <ul class="main-menu__sub-list">
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/product-detail">Товар</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/about">О компании</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/helium">Гелий</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/cryoservice">Криосервис</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/rf-coil">Радиочастотная катушка</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/adsorber">Адсорбер</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/cooling-head">Охлаждающая головка</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/rf-cell">Радиочастотная клетка</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/mri-room">Особенности клетки Фарадея для кабинета МРТ</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="main-menu__item"><a class="main-menu__link" href="/catalog">Каталог</a></li>
                  <li class="main-menu__item"><a class="main-menu__link" href="/service">Сервис</a></li>
                  <li class="main-menu__item"><a class="main-menu__link" href="/trade-in">trade-in</a></li>
                  <li class="main-menu__item"><a class="main-menu__link" href="#0">Бизнес</a>
                    <div class="main-menu__sub">
                      <ul class="main-menu__sub-list">
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/business">Бизнес</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/activity">Мероприятия</a></li>
                        <li class="main-menu__sub-list-item"><a class="main-menu__sub-list-link" href="/career">Карьера</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="main-menu__item"><a class="main-menu__link" href="/contacts">Контакты</a></li>
                </ul>
              </div>
              <div class="main-nav__actions main-nav__contact-us">
                <button class="btn btn_primary" type="button">Связаться с нами</button>
              </div>
              <div class="main-nav__burger js-main-menu-open-btn">
                <button class="btn btn_menu-toggle btn_burger" type="button"><span class="visualli-hidden">Открыть меню</span></button>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main class="page__main">
        @yield('content')
</main>
<footer class="page__footer">
  <div class="footer">
    <div class="footer__inner content-container layout layout_screen-tablet_50-50">
      <h2 class="footer__caption">Свяжитесь с нами</h2>
      <div class="footer__first">
        <form class="form form_contact-us">
          <div class="form__fields">
            <div class="form-field">
              <input class="form-field__input" type="text" placeholder="Имя" value=""/>
            </div>
            <div class="form-field">
              <input class="form-field__input" type="email" placeholder="E-mail" value=""/>
            </div>
          </div>
          <div class="form__textarea">
            <textarea class="textarea" placeholder="Введите текст"></textarea>
          </div>
          <div class="form__submit">
            <button class="btn btn_primary btn_full" type="button">Отправить</button>
          </div>
          <p class="form__info">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных</p>
        </form>
      </div>
      <div class="footer__second">
        <div class="footer__content-block"><a class="footer__link" href="mailto:info@mrtprofi.ru">info@mrtprofi.ru</a></div>
        <div class="footer__content-block"><a class="footer__link" href="tel:+78001002970">8 800 100-29-70</a>
          <p class="footer__text text text_upper">звонок по россии бесплатный</p>
        </div>
        <div class="footer__content-block">
          <p class="footer__text">119991, РФ, г. Москва, Ленинский пр-т,. д. 53, стр. 8 <br>ООО "НПО РТИ", © 2008 - 2017 г.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="{{asset('scripts/bundle.min.js')}}"></script>
</body>
</html>
