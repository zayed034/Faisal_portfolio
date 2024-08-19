<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('social_media', function (Blueprint $table) {
        $table->id();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('youtube')->nullable();
        $table->string('linkedin')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('social_media');
}
}
