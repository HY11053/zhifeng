<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addonarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->text('body');
            $table->string('pics')->default('');
            $table->string('redirect')->default('');
            $table->string('tag')->default('');
            $table->string('coordinate')->default('');
            $table->string('brandname')->default('');
            $table->string('brandtime')->default('');
            $table->string('brandorigin')->default('');
            $table->string('brandnum')->default('');
            $table->string('brandpay')->default('');
            $table->string('brandarea')->default('');
            $table->string('brandmap')->default('');
            $table->string('brandperson')->default('');
            $table->string('brandattch')->default('');
            $table->string('brandapply')->default('');
            $table->string('brandchat')->default('');
            $table->string('brandgroup')->default('');
            $table->string('brandaddr')->default('');
            $table->string('brandduty')->default('');
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
        Schema::drop('addonarticles');
    }
}
