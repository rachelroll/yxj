<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('')->comment('标题');
            $table->string('description')->default('')->comment('简介');
            $table->string('author')->default('')->comment('作者');
            $table->longText('content')->comment('正文');
            $table->string('cover')->default('')->comment('封面图');
            $table->string('category')->default('')->comment('类别：1：机构动态 | 2：项目报道 | 3：乡村观察 | 4：最新动态');
            $table->string('time')->default('')->comment('报道时间');

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
        Schema::dropIfExists('news');
    }
}
