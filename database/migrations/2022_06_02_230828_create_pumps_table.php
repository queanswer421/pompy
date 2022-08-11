<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pumps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producer_id')->default(1);
            $table->foreign('producer_id')
                ->references('id')
                ->on('producers')
                ->onDelete('cascade');
            $table->string('line');
            $table->string('model');
            $table->double('power');
            // $table->integer('type')->nullable()->default(0);
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->double('volume')->nullable()->default(0);
            $table->integer('price')->nullable()->default(0);
            $table->integer('biwa')->nullable()->default(-50);
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
        Schema::dropIfExists('pumps');
    }
};
