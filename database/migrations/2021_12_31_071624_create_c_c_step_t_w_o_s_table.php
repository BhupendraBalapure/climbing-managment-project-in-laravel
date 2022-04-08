<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCCStepTWOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_c_step_t_w_o_s', function (Blueprint $table) {
            $table->id('credit_id');
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('img_name')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('pan')->nullable();
            $table->string('income_source')->nullable();
            $table->string('company_name')->nullable();
            $table->string('loan')->nullable();
            // $table->string('salary')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('homeaddress')->nullable();
            $table->string('homepincode')->nullable();

            $table->string('pan_file_image')->nullable(); 
            $table->string('aadhaar')->nullable();            
            $table->string('income_proof')->nullable();            
            $table->string('statment')->nullable();            
            $table->string('photo')->nullable(); 
            // $table->unsignedbiginteger('credit_id','')->nullable();
            // $table->foreign('credit_id')->references('id')->on('credit_cards')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('c_c_step_t_w_o_s');
    }
}
