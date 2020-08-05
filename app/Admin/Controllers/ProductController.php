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

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('package', __('Package'));
        $grid->column('img_url', __('Img url'));
        $grid->column('year', __('Year'));
        $grid->column('cost', __('Cost'));

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
        $show->field('name', __('Name'));
        $show->field('package', __('Package'));
        $show->field('img_url', __('Img url'));
        $show->field('year', __('Year'));
        $show->field('cost', __('Cost'));
        $show->field('magnit_type', __('Magnit type'));
        $show->field('magnit_field', __('Magnit field'));
        $show->field('channels_number', __('Channels number'));
        $show->field('gradient', __('Gradient'));
        $show->field('program_level', __('Program level'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('description', __('Description'));
        $show->field('options', __('Options'));
        $show->field('coil_complect', __('Coil complect'));
        $show->field('in_complect', __('In complect'));
        $show->field('climat_gear', __('Climat gear'));
        $show->field('instalation', __('Instalation'));
        $show->field('features', __('Features'));

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

        $form->text('name', __('Name'));
        $form->text('package', __('Package'));
        $form->image('img_url', __('Img url'));
        $form->date('year', __('Year'))->format('YYYY');
        $form->decimal('cost', __('Cost'));
        $form->text('magnit_type', __('Magnit type'));
        $form->decimal('magnit_field', __('Magnit field'));
        $form->number('channels_number', __('Channels number'));
        $form->number('gradient', __('Gradient'));
        $form->decimal('program_level', __('Program level'));
        $form->textarea('description', __('Description'));
        $form->textarea('options', __('Options'));
        $form->textarea('coil_complect', __('Coil complect'));
        $form->textarea('in_complect', __('In complect'));
        $form->textarea('climat_gear', __('Climat gear'));
        $form->textarea('instalation', __('Instalation'));
        $form->textarea('features', __('Features'));

        return $form;
    }
}
