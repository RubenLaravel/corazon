<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('mac','20');

            $table->unsignedBigInteger('user_id'); // Considerar nullable para que pueda eliminarse usuario y quedar info relacionada - por probar
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('condition_id'); // Considerar nullable para que pueda eliminarse usuario y quedar info relacionada - por probar
            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade')->onUpdate('cascade');
 
            $table->unsignedBigInteger('action_id');
            $table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
