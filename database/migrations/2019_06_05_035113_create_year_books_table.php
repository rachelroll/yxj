<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_books', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('')->comment('书名');
            $table->string('cover')->default('')->comment('封面图');
            $table->string('content')->default('')->comment('内容');

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
        Schema::dropIfExists('year_books');
    }
}
