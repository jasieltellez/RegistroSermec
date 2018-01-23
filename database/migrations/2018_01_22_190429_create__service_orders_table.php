<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date_order')->nullable();
            $table->timestamp('date_in')->nullable();
            $table->timestamp('date_out')->nullable();
            $table->unsignedInteger('kms')->nullable();
            $table->unsignedInteger('client_id')->references('id')->on('clients');
            $table->unsignedInteger('vehicle_id')->references('id')->on('vehicles');
            $table->text('notes')->nullable();
            $table->text('services')->nullable();
            $table->integer('total')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('balance')->nullable();
            $table->string('payment_method')->nullable();            
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
        Schema::dropIfExists('service_orders');
    }
}
