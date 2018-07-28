<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tagline');
            $table->string('slider_image1');
            $table->string('slider_image2');
            $table->string('slider_image3');
            $table->text('headlines_big');
            $table->text('headlines_small');
            $table->string('about_sentence');
            $table->string('about_image');
            $table->string('about_title');
            $table->string('about_hint');
            $table->text('about_description');
            $table->string('parallax1_image');
            $table->string('parallax1_big');
            $table->string('parallax1_small');
            $table->string('department_sentence');
            $table->string('work_sentence');
            $table->string('info_address');
            $table->string('social_link_facebook');
            $table->string('social_link_line');
            $table->string('social_link_twitter');
            $table->string('social_link_instagram');
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
        Schema::dropIfExists('homes');
    }
}
