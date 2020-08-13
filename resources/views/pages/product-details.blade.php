@extends('layouts.app')
@section('content')
<section class="section">
      {{Breadcrumbs::render('product', $product)}}
    </div>
  </section>
  <section class="section">
    <div class="product-detail">
      <div class="product-detail__main content-container layout layout_screen-tablet_40-60">
        <div class="product-detail__main-content">
        <h1 class="product-detail__title">{{$product->name}} {{$product->description}}</h1>
        <span class="product-detail__price">{{$product->cost}} млн.рублей</span>
        <span class="product-detail__state">Первичная установка {{$product->year}}</span>
          <div class="product-detail__options">
            @if ($product->magnit_type)
                <span>Тип магнита {{$product->magnit_type}}</span>
            @endif
            @if ($product->magnit_field)
                <span>Магнитное поле {{$product->magnit_field}} Tл</span>
            @endif
            @if ($product->channels_number)
                <span>Количество каналов {{$product->channels_number}}</span>
            @endif
            @if ($product->gradient)
                <span>Градиенты {{$product->gradient}}</span>
            @endif
            @if ($product->program_level)
                <span>Уровень программного обеспечения {{$product->program_level}}</span>
            @endif
            </div>
          <div class="product-detail__options"><span>{{$product->garanty}}</span></div>
          <button class="btn btn_primary" type="button" onclick="location.href='/contacts#footer'">Заказать</button>
        </div>
    <div class="product-detail__main-visual"><img src="{{asset('uploads/'.$product->img_url)}}" alt=""></div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="product-detail__description">
      <div class="content-container">
        <h2 class="product-detail__subtitle">Характиристики</h2>
      </div>
      @if ($product->options)
      <div class="content-block content-block_border_bottom">
        <div class="content-container layout layout_screen-tablet_40-60">
          <h3>Опции программного обеспечения:</h3>
        <p>{{$product->options}}</p>
        </div>
      </div>
      @endif
      @if ($product->coil_complect)
      <div class="content-block content-block_border_bottom">
        <div class="content-container layout layout_screen-tablet_40-60">
          <h3>Комплект радиочастотных катушек:</h3>
          <p>{{$product->coil_complect}}</p>
        </div>
      </div>
      @endif
      @if ($product->in_complect)
      <div class="content-block content-block_border_bottom">
        <div class="content-container layout layout_screen-tablet_40-60">
          <h3>В комплекте:</h3>
          <p>
             {{$product->in_complect}}
          </p>
        </div>
      </div>
      @endif
      @if ($product->climat_gear)
      <div class="content-block content-block_border_bottom">
        <div class="content-container layout layout_screen-tablet_40-60">
          <h3>Климатическое оборудование:</h3>
          <p>
            {{$product->climat_gear}}
          </p>
        </div>
      </div>
      @endif
      @if ($product->instalation)
      <div class="content-block content-block_border_bottom">
        <div class="content-container layout layout_screen-tablet_40-60">
          <h3>Предустановочные работы и пуско-наладка:</h3>
          <p>
            {{$product->instalation}}
          </p>
        </div>
      </div>
      @endif
      @if ($product->features)
      <div class="content-block">
        <div class="content-container layout layout_screen-tablet_40-60">
          <h3>Особенности:</h3>
          <p>{{$product->features}}</p>
        </div>
      </div>
    </div>
      @endif

  </section>
  <section class="section section_has-bg space_mb_xl">
    <div class="content-container">
      <p class="section__text-intro">Устранение неполадок любой сложности!</p>
      <div class="layout layout_screen-tablet_60-40">
        <div class="section__part">
          <div class="section__text-block">
            <p>Сервис МРТ  сертифицированными высококвалифицированными инженерами ООО «НПО РТИ», осуществляющих выезд по России и в страны СНГ для оперативного и качественного оказания технического обслуживания</p>
          </div>
          <button class="btn btn_primary btn_adaptive" type="button" onclick="location.href='/service'">Про сервис</button>
        </div>
        <div class="section__part"><img src="/assets/img/demo-image.jpg" alt=""></div>
      </div>
    </div>
  </section>
@endsection
