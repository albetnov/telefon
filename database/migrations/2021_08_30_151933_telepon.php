<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Telepon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telepon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nomor', false, true)->unique();
            $table->string('nama_nomor', 225);
            $table->string('alamat', 225);
            $table->longText('deskripsi');
            $table->unsignedBigInteger("created_by_id");
            $table->unsignedBigInteger('country_code');
            $table->foreign('country_code')->references('id')->on('country_code')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('created_by_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('telepon');
    }
}
