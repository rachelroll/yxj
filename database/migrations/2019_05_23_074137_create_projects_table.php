<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('')->comment('����');
            $table->string('description')->default('')->comment('���');
            $table->string('author')->default('')->comment('����');
            $table->longText('content')->comment('����');
            $table->string('cover')->default('')->comment('����ͼ');
            $table->string('category')->default('')->comment('���');
            $table->string('district')->default('')->comment('����');

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
        Schema::dropIfExists('projects');
    }
}
