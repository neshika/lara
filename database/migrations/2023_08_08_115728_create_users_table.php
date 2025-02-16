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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('kennel_id')->default(0);
            $table->unsignedBigInteger('role_id')->default(1);
            $table->integer('visits')->default(1);
            $table->boolean('online')->default(1);

            $table->softDeletes(); // для мягкого удаления в Model сделать use
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
        Schema::dropIfExists('users');
    }
};
