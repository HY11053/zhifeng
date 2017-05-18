<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitlesToArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archives', function (Blueprint $table) {
            //
            $table->string('ppjstitle')->default('');
            $table->string('jmxqtitle')->default('');
            $table->string('jmystitle')->default('');
            $table->string('jmlctitle')->default('');
            $table->string('jmzctitle')->default('');
            $table->string('jmasktitle')->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archives', function (Blueprint $table) {
            //
            $table->dropColumn(['ppjstitle','jmxqtitle','jmystitle','jmlctitle','jmzctitle','jmasktitle']);
        });
    }
}
