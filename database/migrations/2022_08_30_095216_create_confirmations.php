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
        Schema::create('confirmations', function (Blueprint $table) {
            $table->id();
            $table->text('user_ids');
            $table->unsignedBigInteger('priest_id');
            $table->foreign('priest_id')->references('id')->on('priests');
            $table->unsignedBigInteger('baptism_id');
            $table->foreign('baptism_id')->references('id')->on('baptisms');
            $table->text('church');
            $table->text('church_address');
            $table->date('confirmed_date');
            $table->text('sponsors');
            $table->date('dated');
            $table->integer('series_of');
            $table->integer('number');
            $table->integer('page');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmations');
    }
};
