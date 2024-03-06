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
        Schema::create('manage_booking', function (Blueprint $table) {
            $table->id('BK_Id');
            $table->unsignedBigInteger('CS_Id');
            $table->unsignedBigInteger('RM_Id');
            $table->integer('NO_Of_Person');
            $table->integer('NO_Of_Day');
            $table->date('BK_Date');
            $table->time('BK_Time');
            $table->decimal('Rent', 10, 2);
            $table->decimal('Advance', 10, 2);
            $table->string('Advance_mode');
            $table->date('Chk_Date');
            $table->time('Chk_Time');
            $table->timestamps();
            $table->foreign('CS_Id')->references('CS_Id')->on('manage_customer');
            $table->foreign('RM_Id')->references('RM_Id')->on('manage_room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_booking');
    }
};
