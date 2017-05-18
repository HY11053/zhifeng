<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAcreageColumToAddonarticles extends Migration
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
            $table->string('acreage')->default('');
            $table->string('genre')->default('');
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
            $table->dropColumn(['acreage','genre']);
        });
    }
}
