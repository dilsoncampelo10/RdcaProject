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
        Schema::create('learning_centers', function (Blueprint $table) {
            $table->id();
            $table->string('discipline');
            $table->dateTime('datetime');
            $table->string('place');
            $table->char('format');
            $table->foreignId("id_teacher")->references("id")->on("users");
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
        Schema::dropIfExists('learning_centers');
    }
};
