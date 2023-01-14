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
        Schema::create('despensas_users', function (Blueprint $table) {
            $table->primary('despensa_id', 'user_id');
            $table->foreignId('despensa_id')->references('id')->on('despensas')->ondelete('cascade')->onupdate('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->ondelete('cascade')->onupdate('cascade');
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
        Schema::dropIfExists('despensas_users');
    }
};
