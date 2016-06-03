<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHematologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hematologias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('order');
            $table->string('dni');
            $table->date('deliver_date');
            $table->double('globulos_rojos');
            $table->double('hematrocito');
            $table->double('hemoglobina');
            $table->double('vcm');
            $table->double('hbcm');
            $table->double('chbcm');
            $table->double('vsg');
            $table->double('1rahora');
            $table->double('plaquetas');
            $table->double('globulos_blancos_a');
            $table->double('globulos_blancos_b');
            $table->double('cayados_a');
            $table->double('cayados_b');
            $table->double('segmentados_a');
            $table->double('segmentados_b');
            $table->double('basofilos_a');
            $table->double('basofilos_b');
            $table->double('eosinofilos_a');
            $table->double('eosinofilos_b');
            $table->double('linfocitos_a');
            $table->double('linfocitos_b');
            $table->double('monocitos_a');
            $table->double('monocitos_b');
            $table->text('comment');

            $table->rememberToken();
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
        Schema::drop('hematologias');
    }
}
