<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ratings', function (Blueprint $table) {
            $table->integer('id_rating', true);
            $table->float('rate', 10, 0);
            $table->string('review');
            $table->timestamp('date_rating');
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
        Schema::dropIfExists('Ratings');
    }
}
