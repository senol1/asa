<?php

namespace App\Admin\Controllers;

use App\Models\Author;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AuthorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Author';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Author());

        $grid->column('name', __('Name'));
        $grid->column('specialist', __('Specialist'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('status', __('Status'));

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
        $show = new Show(Author::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('specialist', __('Specialist'));
        $show->field('image', __('Image'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('facebook', __('Facebook'));
        $show->field('twitter', __('Twitter'));
        $show->field('linkedin', __('Linkedin'));
        $show->field('description', __('Description'));
        $show->field('signature_image', __('Signature image'));
        $show->field('biographie', __('Biographie'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Author());

        $form->text('name', __('Name'));
        $form->text('specialist', __('Specialist'));
        $form->image('image', __('Image'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('facebook', __('Facebook'))->default('https://facebook.com/');
        $form->text('twitter', __('Twitter'))->default('https://twitter.com/');
        $form->text('linkedin', __('Linkedin'))->default('https://linkedin.com/');
        $form->ckeditor('description', __('Description'));
        $form->image('signature_image', __('Signature image'));
        $form->ckeditor('biographie', __('Biographie'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
