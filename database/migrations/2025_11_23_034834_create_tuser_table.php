<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('tuser', function (Blueprint $table) {
        $table->increments('id_user');
        $table->string('username', 50);
        $table->string('password', 255);
        $table->string('email', 100)->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('tuser');
}

};
