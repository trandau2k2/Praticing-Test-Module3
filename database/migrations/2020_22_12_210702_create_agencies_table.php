<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{

    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('manager');
            $table->string('status');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
