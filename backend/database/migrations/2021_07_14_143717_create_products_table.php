<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('product_id'); // 商品ID
            $table->string('product_name'); // 商品名
            $table->integer('price'); // 価格
            $table->integer('brand_id'); // ブランド名
            $table->dateTime('create_date'); // 作成日時
            $table->dateTime('update_date'); // 更新日時
            $table->tinyInteger('delete_flag')->default(0); // 削除フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
