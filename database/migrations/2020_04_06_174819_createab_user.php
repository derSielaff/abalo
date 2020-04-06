<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateabUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_user', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('ab_name',80)->unique();
                    $table->string('ab_password',200);
                    $table->string('ab_mail',200)->unique();

                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_user');
    }
}
