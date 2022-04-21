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
        Schema::create('air_qualities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('city');
            $table->string('name');
            $table->decimal('geo')->nullable();
            $table->string('pm_2_5')->nullable();
            $table->string('pm_1_0')->nullable();
            $table->float('dew')->nullable();
            $table->float('h')->nullable();
            $table->float('p')->nullable();
            $table->float('t')->nullable();
            $table->float('w')->nullable();
            $table->string('o_3')->nullable();
            $table->string('so_2')->nullable();
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
        Schema::dropIfExists('airs_qualities');
    }
};
