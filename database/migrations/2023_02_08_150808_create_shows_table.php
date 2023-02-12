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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название шоу');
            $table->text('small_text')->comment('Краткое описание');
            $table->text('long_text')->comment('Большое описание');
            $table->string('banner')->comment('Изображение шоу');
            $table->double('price')->comment('Цена шоу');
            $table->integer('people')->comment('Кол-во людей на шоу');
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
        Schema::dropIfExists('shows');
    }
};
