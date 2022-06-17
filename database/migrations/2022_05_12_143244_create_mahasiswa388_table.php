<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswa388Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa388', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nim');
            $table->char('nama', 100);
            $table->char('gender', 20);
            $table->char('jurusan', 50);
            $table->char('bid_minat', 50);
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
        Schema::dropIfExists('mahasiswa388');
    }
}
