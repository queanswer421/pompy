<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeat55sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heat55s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')
                ->references('id')
                ->on('pumps')
                ->onDelete('cascade');
         
            $table->double('p55m20')->nullable()->default(0);

            $table->double('p55m15')->nullable()->default(0);

            $table->double('p55m7')->nullable()->default(0);

            $table->double('p55p2')->nullable()->default(0);

            $table->double('p55p7')->nullable()->default(0);

            $table->double('p55p10')->nullable()->default(0);

            $table->double('p55p12')->nullable()->default(0);

            $table->double('p55p20')->nullable()->default(0);
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
        Schema::dropIfExists('heat55s');
    }
}