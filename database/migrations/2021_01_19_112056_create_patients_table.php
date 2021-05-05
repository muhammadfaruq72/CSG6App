<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('family');
            $table->string('gname');
            $table->string('gender');
            $table->string('birth');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile');
            $table->string('address');
            $table->string('suburb');
            $table->string('p_code');
            $table->string('blood');
            $table->string('image');
            $table->string('e_title');
            $table->string('e_family');
            $table->string('e_gname');
            $table->string('e_phone');
            $table->string('e_mobile');
            $table->string('allergies');
            $table->string('tendency');
            $table->string('diseases');
            $table->string('pressure');
            $table->string('accidents');
            $table->string('diabetic');
            $table->string('surgeries');
            $table->string('others');
            $table->string('infectious');
            $table->string('history');
            $table->string('medications');
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
        Schema::dropIfExists('patients');
    }
}
