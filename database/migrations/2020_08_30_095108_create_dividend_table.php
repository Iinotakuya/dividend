<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDividendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dividend', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company'); // 会社名・銘柄コードを保存するカラム
            $table->string('Industry');  // 業種を保存するカラム
            $table->string('detail');  // 詳細を保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
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
        Schema::dropIfExists('dividend');
    }
}
