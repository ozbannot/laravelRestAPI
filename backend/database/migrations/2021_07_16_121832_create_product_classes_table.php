<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_classes', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id'); // 商品ID
            $table->integer('stock'); // 在庫数
            $table->tinyInteger('stock_limit_flag')->default(0); // 在庫制限フラグ
            $table->integer('tax'); // 税率
            $table->dateTime('publication_date'); // 掲載開始日時
            $table->dateTime('from_date'); // 販売開始日時
            $table->dateTime('to_date'); // 販売終了日時
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
        Schema::dropIfExists('product_classes');
    }
}
