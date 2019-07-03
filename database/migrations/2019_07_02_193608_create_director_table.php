<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('director', function (Blueprint $table) {
            //
        });
    }
}
