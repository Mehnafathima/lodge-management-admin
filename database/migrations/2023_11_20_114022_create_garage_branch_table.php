<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garage_branch', function (Blueprint $table) {
            $table->id('BN_Id');
            $table->string('BN_Name');
            $table->text('BN_Place')->nullable();
            $table->string('BN_Email')->nullable();
            $table->string('BN_Phone')->nullable();
            $table->string('BN_Status')->nullable();
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
        Schema::dropIfExists('garage_branch');
    }
}
