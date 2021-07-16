<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test2', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id'); // 商品ID
            $table->integer('ga_id'); // gaID
            $table->integer('login_id')->charset(null)->nullable(); // ログインID
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
        Schema::dropIfExists('test2');
    }
}
