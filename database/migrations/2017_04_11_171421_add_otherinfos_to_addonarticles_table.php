<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherinfosToAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            //
            $table->string('licenseno')->default('');
            $table->string('bdxg_search')->default('');
            $table->string('registeredcapital')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            //
            $table->dropColumn(['licenseno','bdxg_search','registeredcapital']);

        });
    }
}
