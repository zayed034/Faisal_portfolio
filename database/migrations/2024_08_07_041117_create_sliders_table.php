<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('sliders', function (Blueprint $table) {
        $table->id();
        $table->string('background_image');
        $table->string('digital_marketing');
        $table->string('seo_expert');
        $table->string('wordpress');
        $table->string('resume');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('sliders');
}

}
