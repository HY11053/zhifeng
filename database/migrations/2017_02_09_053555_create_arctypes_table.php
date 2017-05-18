<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArctypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arctypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reid')->default(0);
            $table->integer('topid')->default(0);
            $table->integer('sortrank');
            $table->string('typename');
            $table->string('typedir');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->smallInteger('dirposition')->default(1);
            $table->integer('is_write');
            $table->string('real_path')->default('');
            $table->string('litpic')->default('');
            $table->string('typeimages')->default('');
            $table->string('contents')->default('');
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
        Schema::drop('arctypes');
    }
}
