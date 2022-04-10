<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->integer('id_rating', true);
            $table->double('rate');
            $table->string('review');
            $table->timestamp('date_rating')->useCurrentOnUpdate()->useCurrent();
            $table->integer('id_resto')->index('id_resto');
            $table->integer('id_user')->index('id_user');
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
        Schema::dropIfExists('ratings');
    }
}
