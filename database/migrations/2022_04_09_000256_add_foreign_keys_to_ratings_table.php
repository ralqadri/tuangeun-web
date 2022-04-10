<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->foreign(['id_resto'], 'rating_ibfk_1')->references(['id_resto'])->on('restaurants');
            $table->foreign(['id_user'], 'rating_ibfk_2')->references(['id_user'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->dropForeign('rating_ibfk_1');
            $table->dropForeign('rating_ibfk_2');
        });
    }
}
