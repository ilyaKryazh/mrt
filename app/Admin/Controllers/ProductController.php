<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Имя'));
        $grid->column('description', __('Описание'));
        $grid->column('brand.name', __('Бренд'));
        $grid->column('img_url', __('Фото'));
        $grid->column('year', __('Первичная установка'));
        $grid->column('cost', __('Цена'));

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Имя'));
        $show->field('description', __('Описание'));
        $show->field('brand.name', __('Бренд'));
        $show->field('img_url', __('Фото'));
        $show->field('year', __('Первичная установка'));
        $show->field('cost', __('Цена'));
        $show->field('magnit_type', __('Тип магнита'));
        $show->field('magnit_field', __('Магнитное поле'));
        $show->field('channels_number', __('Кол-во каналов'));
        $show->field('gradient', __('Градиенты'));
        $show->field('program_level', __('Ур ПО'));
        $show->field('created_at', __('Добавлено'));
        $show->field('updated_at', __('Обновлено'));

        $show->field('garanty', __('Гарантия'));
        $show->field('options', __('Опции ПО'));
        $show->field('coil_complect', __('Комплект радиочастотных катушек'));
        $show->field('in_complect', __('В комплекте'));
        $show->field('climat_gear', __('Климатическое оборудование'));
        $show->field('instalation', __('Предустановочные работы и пуско-наладка'));
        $show->field('features', __('Особенности'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Имя'));
        $form->text('description', __('Описание'));
        $form->select('brand_id', __('Бренд'))->options(function () {
            $brands = Brand::all();
            $result = [];
            foreach ($brands as $val) {
                $result += [$val->id => "$val->name"];
            }
            return $result;
        });
        $form->image('img_url', __('Фото'));
        $form->text('year', __('Первичная установка'));
        $form->text('cost', __('Цена'));

        $form->textarea('garanty', __('Гарантия'));
        $form->text('magnit_type', __('Тип магнита'));
        $form->text('magnit_field', __('Магнитное поле'));
        $form->text('channels_number', __('Кол-во каналов'));
        $form->text('gradient', __('Градиенты'));
        $form->text('program_level', __('Ур ПО'));

        $form->textarea('options', __('Опции ПО'));
        $form->textarea('coil_complect', __('Комплект радиочастотных катушек'));
        $form->textarea('in_complect', __('В комплекте'));
        $form->textarea('climat_gear', __('Климатическое оборудование'));
        $form->textarea('instalation', __('Предустановочные работы и пуско-наладка'));
        $form->textarea('features', __('Особенности'));

        return $form;
    }
}
