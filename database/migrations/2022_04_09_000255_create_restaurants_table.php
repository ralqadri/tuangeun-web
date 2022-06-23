<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->integer('id_resto', true);
            $table->string('name_resto');
            $table->string('desc_resto');
            $table->string('category', 20);
            $table->string('alamat_resto');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('imageLink');
            $table->string('googleMapsLink');
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
        Schema::dropIfExists('restaurants');
    }
}
