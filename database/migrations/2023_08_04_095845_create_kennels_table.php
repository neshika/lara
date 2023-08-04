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
        Schema::create('kennels', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('owner');
            $table->dateTime('date');
            $table->integer('dogs');
            $table->string('l_litter')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('kennels');
    }
};
