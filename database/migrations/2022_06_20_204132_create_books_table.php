<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('couverture')->nullable();
            $table->text("resume")->nullable();
            $table->longText('description')->nullable();
            $table->datetime("date_publication");
            $table->string("pdf");

            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id')->references("id")->on('authors');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references("id")->on('categories');

            $table->boolean("status")->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
