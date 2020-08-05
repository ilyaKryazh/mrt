<footer class="page__footer">
    <div class="footer">
      <div class="footer__inner content-container layout layout_screen-tablet_50-50">
        <h2 class="footer__caption">Свяжитесь с нами</h2>
        <div class="footer__first">
          <form method="POST" action="/emailfooter" class="form form_contact-us" id="footer">
              @method('POST')
              @csrf
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
              <button class="btn btn_primary btn_full" >Отправить</button>
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
