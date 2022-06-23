<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeat35sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heat35s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')
                ->references('id')
                ->on('pumps')
                ->onDelete('cascade');
            $table->double('p35m20')->nullable()->default(0);

            $table->double('p35m15')->nullable()->default(0);

            $table->double('p35m7')->nullable()->default(0);

            $table->double('p35p2')->nullable()->default(0);

            $table->double('p35p7')->nullable()->default(0);

            $table->double('p35p10')->nullable()->default(0);

            $table->double('p35p12')->nullable()->default(0);

            $table->double('p35p20')->nullable()->default(0);

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
        Schema::dropIfExists('heat35s');
    }
}
