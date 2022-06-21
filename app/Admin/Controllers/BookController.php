<?php

namespace App\Admin\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BookController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Book';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Book());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('date_publication', __('Date publication'));
        $grid->column('pdf', __('Pdf'));
        $grid->column('author_id', "Autheur");
        $grid->column('category_id', "Catégorie");
        $grid->column('status', "Statut");

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
        $show = new Show(Book::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('couverture', __('Couverture'));
        $show->field('resume', __('Resume'));
        $show->field('description', __('Description'));
        $show->field('date_publication', __('Date publication'));
        $show->field('pdf', __('Pdf'));
        $show->field('author_id', __('Author id'));
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new Book());

        $form->text('title', __('Title'));
        $form->image('couverture', __('Couverture'));
        $form->ckeditor('resume', __('Resume'));
        $form->ckeditor('description', __('Description'));
        $form->datetime('date_publication', __('Date publication'))->default(date('Y-m-d H:i:s'));
        $form->file('pdf', __('Pdf'))->rules('mimes:pdf');
        //$form->number('author_id', __('Author id'));
        $authors = Author::all();
        $data = [];
        foreach ($authors as $value) {
            $data[$value->id] = $value->name;
        }
        $form->select('author_id')->options($data);
        //$form->number('category_id', __('Category id'));
        $categories = Category::all();
        $data = [];
        foreach ($categories as $value) {
            $data[$value->id] = $value->name;
        }
        $form->select('category_id')->options($data);
        $form->switch('status', __('Status'));

        return $form;
    }
}
