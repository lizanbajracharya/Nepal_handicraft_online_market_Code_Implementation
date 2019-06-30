<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Paymentway');
            $table->string('Price');
            $table->bigInteger('Userid')->unsigned();
            $table->foreign('Userid')->references('id')->on('users')
            ->onDelete('cascade');
            $table->bigInteger('Productid')->unsigned();
            $table->foreign('Productid')->references('id')->on('products')
            ->onDelete('cascade');
            $table->string('Location');
            $table->string('Contact');
            $table->string('Quantity');
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
        Schema::dropIfExists('payments');
    }
}
