<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('apartment_name')->nullable();
            $table->string('address')->nullable();
            $table->string('flat_size')->nullable();
            $table->string('contact')->nullable();
            $table->string('price')->nullable();
            $table->string('bed')->nullable();
            $table->string('drawing')->nullable();
            $table->string('dining')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('washroom')->nullable();
            $table->string('rent_sell')->nullable();
            $table->text('text')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default(0);
            $table->string('feature')->default(0);
            $table->string('city')->nullable();



          
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
        Schema::dropIfExists('apartments');
    }
}
