<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('name',20)->index()->comment('商品名称');
            $table->string('summary')->comment('商品介绍');
            $table->decimal('price',10,2)->comment('商品价格');
            $table->string('preview')->comment('预览');
            $table->unsignedInteger('category_id')->comment('分类id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');//创建外键时，关联外键类型必须一致
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
