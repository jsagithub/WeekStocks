<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSetPredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_set_predictions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companie_symbol');
            $table->string('data_date');
            $table->string('open_value');
            $table->string('hight_value');
            $table->string('low_value');
            $table->string('close_value');
            $table->string('adj_close_value');
            $table->string('volume_value');
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
        Schema::dropIfExists('data_set_predictions');
    }
}
