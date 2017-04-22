<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanform', function( Blueprint $table){
            $table->increments('id');
            $table->string('fistname');
            $table->string('lastname');
            $table->string('address');
            $table->string('region');
            $table->string('district');
            $table->string('phoneNo');
            $table->string('business_plan');
            $table->string('creditor');
            $table->string('edu_background');
            $table->string('loan_app_reason');
            $table->string('total_loan1');
            $table->string('total_loan2');
            $table->string('working_company');
            $table->string('position_on_wc');
            $table->string('loantime');
            $table->string('bankaccount');
            $table->string('owned_business');
            $table->integer('stake_holders_id')->unsigned();
            $table->string('stake_holders_id')->references('lastname')->on('stake_holders')->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('loanform');
    }
}
