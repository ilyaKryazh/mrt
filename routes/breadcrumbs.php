<?php
Breadcrumbs::for('home', function($trail){
    $trail->push('Главная', route('home'));
});

Breadcrumbs::for('seconds', function($trail, $page){
    $trail->parent('home');
    $trail->push($page->name);
});

Breadcrumbs::for('catalog', function($trail){
    $trail->parent('home');
    $trail->push('Каталог', route('catalog'));
});

Breadcrumbs::for('product', function($trail, $item)
{
    $trail->parent('catalog');
    $trail->push($item->name, route('details', $item->id));
});
