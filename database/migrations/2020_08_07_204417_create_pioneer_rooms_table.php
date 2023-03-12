<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePioneerRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pioneer_rooms', function (Blueprint $table) {
          $table->id();
          $table->text('sid');
          $table->text('description');
          $table->text('comments')->nullable();;
          $table->integer('picsnum');
          $table->string('keynum')->nullable();
          $table->string('img1')->nullable();
          $table->string('img2')->nullable();
          $table->string('img3')->nullable();
          $table->string('img4')->nullable();
          $table->string('img5')->nullable();
          $table->string('img6')->nullable();
          $table->string('img7')->nullable();
          $table->string('img8')->nullable();
          $table->string('img9')->nullable();
          $table->string('img10')->nullable();
          $table->string('img11')->nullable();
          $table->string('img12')->nullable();
          $table->integer('planpage')->nullable();
          $table->string('maplocation')->nullable();
          $table->integer('route')->nullable();
          $table->integer('routeend')->nullable();
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
        Schema::dropIfExists('pioneer_rooms');
    }
}
