<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestVerify extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_verifikasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('created_by_id');
            $table->enum('status', ['approved', 'rejected', 'pending']);
            $table->foreign('contact_id')->references('id')->on('telepon')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('created_by_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_verifikasi');
    }
}
