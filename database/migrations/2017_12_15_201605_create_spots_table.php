<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique();

            $table->string('address')->nullable();
            $table->string('city');

            $table->string('image')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('website')->nullable();

            $table->boolean('is_approved')->default(false);
            $table->boolean('is_featured')->default(false);

            $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::dropIfExists('spots');
    }
}
