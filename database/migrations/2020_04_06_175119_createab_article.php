<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateabArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_article', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ab_name',80);
            $table->integer('ab_price');
            $table->string('ab_description',1000);
            $table->bigInteger('ab_creator_id');
            $table->timestamp('ab_createdate');

            $table->foreign('ab_creator_id')->references('id')->on('ab_user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_article');
    }
}
