<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtrainers', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('Email');
            $table->String('Address');
            $table->double('Contact_Number');
            $table->double('Time_Slot');
            $table->double('Membership_Number');
            $table->double('Age');
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
        Schema::dropIfExists('addtrainers');
    }
}
