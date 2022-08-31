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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->text('user_ids');
            $table->unsignedBigInteger('priest_id');
            $table->foreign('priest_id')->references('id')->on('priests');
            $table->text('husband_residence');
            $table->text('wife_residence');
            $table->text('place_of_marriage');
            $table->dateTime('date_time_marriage');
            $table->string('marriage_license');
            $table->date('issued_date');
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
        Schema::dropIfExists('marriages');
    }
};
