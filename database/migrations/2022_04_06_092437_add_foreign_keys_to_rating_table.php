<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Ratings', function (Blueprint $table) {
            $table->foreign(['id_user'], 'rating_ibfk_2')->references(['id_user'])->on('Users');
            $table->foreign(['id_resto'], 'rating_ibfk_1')->references(['id_resto'])->on('Restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Ratings', function (Blueprint $table) {
            $table->dropForeign('rating_ibfk_2');
            $table->dropForeign('rating_ibfk_1');
        });
    }
}
