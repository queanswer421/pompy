<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeat45sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heat45s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')
                ->references('id')
                ->on('pumps')
                ->onDelete('cascade');

            $table->double('m20')->nullable()->default(0);            

            $table->double('m15')->nullable()->default(0);

            $table->double('m7')->nullable()->default(0);

            $table->double('p2')->nullable()->default(0);

            $table->double('p7')->nullable()->default(0);

            $table->double('p10')->nullable()->default(0);

            $table->double('p12')->nullable()->default(0);

            $table->double('p20')->nullable()->default(0);

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
        Schema::dropIfExists('heat45s');
    }
}
