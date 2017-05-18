<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->integer('ismake');
            $table->integer('click');
            $table->string('title');
            $table->string('shorttitle');
            $table->string('tags');
            $table->string('country');
            $table->timestamp('published_at');
            $table->integer('mid');
            $table->string('keywords');
            $table->string('description');
            $table->string('write');
            $table->string('litpic');
            $table->smallInteger('dutyadmin');
            $table->timestamps();
            //$table->primary('typeid');
            //$table->foreign('typeid')->references('id')->on('arctypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archives');
    }
}
