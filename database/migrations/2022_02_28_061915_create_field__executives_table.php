<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldExecutivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field__executives', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('occupation');
            $table->string('income');
            $table->string('remark');
            $table->string('t_l_code')->nullable();
            $table->string('e_code')->nullable();
            $table->string('executive_name')->nullable();
            $table->string('status')->nullable();
            $table->string('message')->nullable();
            $table->string('message_exe')->nullable();

            $table->string('adher_front')->nullable();
            $table->string('adher_back')->nullable();
            $table->string('pan')->nullable();
            $table->string('income_prof')->nullable();
            $table->string('photo')->nullable();
            $table->string('statment')->nullable();
            $table->string('bill')->nullable();


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
        Schema::dropIfExists('field__executives');
    }
}
