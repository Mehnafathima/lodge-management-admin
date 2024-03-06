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
        Schema::create('manage_customer', function (Blueprint $table) {
            $table->id('CS_Id');
            $table->string('CS_Name');
            $table->text('CS_Address');
            $table->string('CS_Phone');
            $table->string('CS_Country');
            $table->string('CS_ID_Type');
            $table->string('CS_ID_No');
            $table->string('CS_Status');
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
        Schema::dropIfExists('manage_customer');
    }
};
