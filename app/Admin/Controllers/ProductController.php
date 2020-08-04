<?php

namespace App\Admin\Controllers;

use App\Models\Product;
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

        $grid->colum('id', __('ID'));
        $grid->column('name',__('Имя'));
        $grid->column('year', __('Год установки'));
        $grid->column('cost',__('Цена'));
        $grid->column('magnit_type',__('Тип магнита'));
        $grid->column('magnit_field', __('Магнитное поле'));
        $grid->column('channels_number', __('Кол-во каналов'));
        $grid->column('gradient', __('Градиент'));
        $grid->column('program_level', __('Ур ПО'));
        $grid->column('created_at', __('Дата создания'));
        $grid->column('updated_at', __('Дата обновления'));

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

        $show->field('id', __('ID'));
        $show->field('name',__('Имя'));
        $show->field('year', __('Год установки'));
        $show->field('cost',__('Цена'));
        $show->field('magnit_type',__('Тип магнита'));
        $show->field('magnit_field', __('Магнитное поле'));
        $show->field('channels_number', __('Кол-во каналов'));
        $show->field('gradient', __('Градиент'));
        $show->field('program_level', __('Ур ПО'));

        $show->field('description', __('description'));
        $show->field('options', __('Опции программного обеспечения'));
        $show->field('coil_complect', __('Комплект радиочастотных катушек'));
        $show->field('in_complect', __('В комплекте'));
        $show->field('climat_gear', __('Климатическое оборудование'));
        $show->field('instalation', __('Предустановочные работы и пуско-наладка'));
        $show->field('features', __('Особенности'));

        $show->field('created_at', __('Дата создания'));
        $show->field('updated_at', __('Дата обновления'));

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

        $form->text('name',__('Имя'));
        $form->date('year', __('Год установки'))->format('YYYY');
        $form->number('cost',__('Цена'));
        $form->text('magnit_type',__('Тип магнита'));
        $form->number('magnit_field', __('Магнитное поле'));
        $form->number('channels_number', __('Кол-во каналов'));
        $form->number('gradient', __('Градиент'));
        $form->text('program_level', __('Ур ПО'));

        $form->textarea('description', __('description'));
        $form->textarea('options', __('Опции программного обеспечения'));
        $form->textarea('coil_complect', __('Комплект радиочастотных катушек'));
        $form->textarea('in_complect', __('В комплекте'));
        $form->textarea('climat_gear', __('Климатическое оборудование'));
        $form->textarea('instalation', __('Предустановочные работы и пуско-наладка'));
        $form->textarea('features', __('Особенности'));

        $form->text('created_at', __('Дата создания'))->disable();
        $form->text('updated_at', __('Дата обновления'))->disable();

        return $form;
    }
}
