<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_loans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('dob');
            $table->string('pan');
            $table->string('income_source');
            $table->string('company_name');
            $table->string('loan');
            $table->string('salary');
            $table->string('city');
            $table->string('pincode');

            $table->string('pan_file_image')->nullable(); 
            $table->string('aadhaar')->nullable();            
            $table->string('income_proof')->nullable();            
            $table->string('statment')->nullable();            
            $table->string('photo')->nullable();                 

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
        Schema::dropIfExists('personal_loans');
    }
}
