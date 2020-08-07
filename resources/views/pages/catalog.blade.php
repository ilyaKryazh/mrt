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
              <form action="/catalog">
            <select class="form-field__field"  name="brand">
              <option  value="">Все бренды</option>
              @foreach ($brands as $brand)
                  <option value="{{$brand->id}}"@if ($brand->id == $request->brand)
                      selected
                  @endif>{{$brand->name}}</option>
              @endforeach
            </select>
        </div>
        <button class="btn btn_primary btn_full" >Найти</button>

        <button class="btn btn_primary btn_full" type="clear">Сбросить фильтры</button>
        </div>
    </form>
        <div class="catalog__items grid grid_ratio_4">

            @foreach ($products as $product)
        <a class="card card_has-popup-btn card_hover-shadow" href="{{ route('details', $product->id) }}">
            <div class="card__visual"><img class="card__image" src="{{asset('uploads/'.$product->img_url)}}" alt=""/>
              <div class="card__ghost-btn">
                <button class="btn btn_secondary btn_full" type="button">Подробнее</button>
              </div>
            </div>
            <div class="card__body card__body_text-center">
              <h3 class="card__title card__title_text-upper">{{$product->name}}</h3>
              <p class="card__text">{{$product->cost}} млн.рублей</p>
              <p class="card__text card__text_accent">{{$product->description}}</p>
            </div>
          </a>
            @endforeach

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
