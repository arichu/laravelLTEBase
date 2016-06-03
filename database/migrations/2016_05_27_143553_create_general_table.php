<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('generals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('order');
            $table->string('dni');
            $table->date('deliver_date');
            $table->string('volumen');
            $table->string('color');
            $table->string('olor');
            $table->string('espuma');
            $table->string('aspecto');
            $table->string('densidad');
            $table->string('reaccion');
            $table->string('proteinas');
            $table->string('ccetonicos');
            $table->string('hemoglobina');
            $table->string('glucosa');
            $table->string('salbiliares');
            $table->string('pigbiliares');
            $table->string('urobilinogeno');
            $table->string('nitritos');
            $table->string('leucocitos');
            $table->string('hematies');
            $table->string('celepiteliales');
            $table->string('flbacteriana');
            $table->string('cristales');
            $table->string('otros');
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
        Schema::drop('generals');
    }
}
