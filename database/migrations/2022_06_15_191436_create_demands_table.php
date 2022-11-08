<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pump_id');
            $table->foreign('pump_id')
                ->references('id')
                ->on('pumps')
                ->onDelete('cascade');
            $table->double('minus20');
            $table->double('minus19');
            $table->double('minus18');
            $table->double('minus17');
            $table->double('minus16');
            $table->double('minus15');
            $table->double('minus14');
            $table->double('minus13');
            $table->double('minus12');
            $table->double('minus11');
            $table->double('minus10');
            $table->double('minus9');
            $table->double('minus8');
            $table->double('minus7');
            $table->double('minus6');
            $table->double('minus5');
            $table->double('minus4');
            $table->double('minus3');
            $table->double('minus2');
            $table->double('minus1');
            $table->double('zero');
            $table->double('plus1');
            $table->double('plus2');
            $table->double('plus3');
            $table->double('plus4');
            $table->double('plus5');
            $table->double('plus6');
            $table->double('plus7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demands');
    }
}
