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
            $table->string('producer');
            $table->string('line');
            $table->string('model');
            $table->integer('type')->nullable()->default(0);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->double('p35m20')->nullable()->default(0);
            $table->double('p45m20')->nullable()->default(0);            
            $table->double('p55m20')->nullable()->default(0);
            $table->double('p35m15')->nullable()->default(0);
            $table->double('p45m15')->nullable()->default(0);
            $table->double('p55m15')->nullable()->default(0);
            $table->double('p35m7')->nullable()->default(0);
            $table->double('p45m7')->nullable()->default(0);
            $table->double('p55m7')->nullable()->default(0);
            $table->double('p35p2')->nullable()->default(0);
            $table->double('p45p2')->nullable()->default(0);
            $table->double('p55p2')->nullable()->default(0);
            $table->double('p35p7')->nullable()->default(0);
            $table->double('p45p7')->nullable()->default(0);
            $table->double('p55p7')->nullable()->default(0);
            $table->double('p35p10')->nullable()->default(0);
            $table->double('p45p10')->nullable()->default(0);
            $table->double('p55p10')->nullable()->default(0);
            $table->double('p35p12')->nullable()->default(0);
            $table->double('p45p12')->nullable()->default(0);
            $table->double('p55p12')->nullable()->default(0);
            $table->double('p35p20')->nullable()->default(0);
            $table->double('p45p20')->nullable()->default(0);
            $table->double('p55p20')->nullable()->default(0);
            $table->double('volume')->nullable()->default(0);
            $table->integer('price')->nullable()->default(0);
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
