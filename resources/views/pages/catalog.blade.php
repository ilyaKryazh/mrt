@extends('layouts.app')
@section('content')
<section class="section">
    <div class="content-container">
      <div class="catalog layout layout_row_auto">
        <div class="catalog__categories grid grid_ratio_4"><a class="card card_short-image" href="#0">
            <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper" href="#0">МРТ</h3>
            </div></a><a class="card card_short-image" href="#0">
            <div class="card__visual"><img class="card__image" src="/assets/img/demo-image.jpg" alt=""/>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper" href="#0">КТ</h3>
            </div></a>
        </div>
        <div class="catalog__filter grid grid_ratio_4">
          <div class="form-field">
            <select class="form-field__field">
              <option value="" data-placeholder="data-placeholder">Бренд</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <button class="btn btn_primary btn_full" type="button">Сбросить фильтры</button>
        </div>
        <div class="catalog__items grid grid_ratio_4">



          <a class="card card_has-popup-btn card_hover-shadow" href="/product-details/philips-3-0t-achieva-mri-komplekt-premium">
            <div class="card__visual"><img class="card__image" src="/assets/products/Philips-Achieva-3T-komplekt-premium.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS 3.0T ACHIEVA MRI.</h3>
              <p class="card__text">35,5 млн.рублей</p>
              <p class="card__text card__text_accent">Комплект “Премиум”</p>
            </div>
          </a>

            <a class="card card_has-popup-btn card_hover-shadow" href="/product-details/philips-intera-achieva-v-kruglykh-kozhukhakh">
            <div class="card__visual"><img class="card__image" src="/assets/products/Philips-Intera-Achieva-v-kruglykh-kozhukhakh1-768x1024.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS INTERA ACHIEVA</h3>
              <p class="card__text">19,8 млн.рублей</p>
              <p class="card__text card__text_accent">В КРУГЛЫХ КОЖУХАХ</p>
            </div>
          </a>

           <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-achieva-1-5-t-2005.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/Philips-Achieva-15-T.png" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS ACHIEVA 1,5 Т</h3>
              <p class="card__text">22.5 млн.рублей</p>
              <p class="card__text card__text_accent">2005</p>
            </div>
          </a>

           <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.siemens-symphony-1-5t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/siemens-symphony-1-5t.png" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">SIEMENS SYMPHONY 1.5 T</h3>
              <p class="card__text">19.5 млн.рублей</p>
              <p class="card__text card__text_accent">Комплект эконом «Symphony»</p>
            </div>
          </a>

           <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.dixion-xgy-oper-0-5t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/dixion-xgy-oper-0-5t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">DIXON XGY OPER 0.5 T</h3>
              <p class="card__text">10,7 млн.рублей</p>
              <p class="card__text card__text_accent">Комплект эконом «DIXION»</p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-achieva-3-0-t-sp.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/philips-achieva-3-0-t-sp.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS ACHIEVA 3,0 Т</h3>
              <p class="card__text">СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ!</br> 29,0 млн.рублей</p>
              <p class="card__text card__text_accent">АППАРАТ В НАЛИЧИИ</p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.mrt-philips-intera-1-5-t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/mrt-philips-intera-1-5-t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS INTERA 1,5 T</h3>
              <p class="card__text">15 млн.рублей</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-intera-achieva.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/philips-intera-achieva.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS INTERA ACHIEVA 1,5 Т</h3>
              <p class="card__text">17 млн.рублей</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-achieva-nova-1-5-t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/philips-achieva-nova-1-5-t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS ACHIEVA NOVA</br> 1,5 Т</h3>
              <p class="card__text">22.5 млн.рублей</p>
              <p class="card__text card__text_accent">АППАРАТ В НАЛИЧИИ</p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-ingenia-15-t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/philips-ingenia-15-t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS INGENIA 1,5 T</h3>
              <p class="card__text">ЦЕНА: ПО ЗАПРОСУ</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-achieva-3t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/philips-achieva-3t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS ACHIEVA 3,0 T</h3>
              <p class="card__text">ЦЕНА: ПО ЗАПРОСУ</p>
              <p class="card__text card__text_accent">2004-2010 г.в.</p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.philips-ingenia-3-t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/philips-ingenia-3-t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">PHILIPS INGENIA 3,0 T</h3>
              <p class="card__text">ЦЕНА: ПО ЗАПРОСУ</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.siemens-symphony-15-t2.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/siemens-symphony-15-t2.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">SIEMENS MAGNETOM SYMPHONY 1.5 T</h3>
              <p class="card__text">17 МЛН. РУБЛЕЙ</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.siemens-essenza-mrt.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/siemens-essenza-mrt.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">SIEMENS ESSENZA 1.5 T</h3>
              <p class="card__text">28 МЛН. РУБЛЕЙ</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>

          <a class="card card_has-popup-btn card_hover-shadow" href="/product-detail.siemens-avanto-15-t.html">
            <div class="card__visual"><img class="card__image" src="/assets/products/siemens-avanto-15-t.jpg" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">SIEMENS AVANTO 1,5 T</h3>
              <p class="card__text">30 МЛН. РУБЛЕЙ</p>
              <p class="card__text card__text_accent"></p>
            </div>
          </a>
        </div>
        <div class="catalog__footer">
          <button class="btn btn_secondary btn_adaptive" type="button">Загрузить еще</button>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_has-bg space_mb_xl">
    <div class="content-container layout layout_screen-tablet_40-60">
      <div class="section__part"><img src="/assets/img/demo-image.jpg" alt=""></div>
      <div class="section__part">
        <div class="section__text-block">
          <p class="section__text-intro">НПО РТИ предлагает уникальную услугу на российском рынке МРТ trade-in</p>
          <p>Вы продаете свой томограф компании или рекомендованному компанией покупателю и приобретаете другой МРТ с учетом средств, вырученных от продажи вашего старого томографа</p>
        </div>
        <button class="btn btn_primary btn_adaptive" type="button">Про Trade-in</button>
      </div>
    </div>
  </section>
@endsection
