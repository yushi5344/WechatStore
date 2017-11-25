<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unique()->comment('主键id');
            $table->string('name',20)->index()->comment('分类名称');
            $table->integer('category_no')->comment('分类序号');
            $table->string('preview','100')->comment('预览');
            $table->integer('parent_id')->index()->comment('父级id');
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
        Schema::drop('category');
    }
}
