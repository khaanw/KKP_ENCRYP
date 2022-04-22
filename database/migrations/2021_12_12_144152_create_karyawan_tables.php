<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->string('idKaryawan')->unique();
            $table->string('namaDepan');
            $table->string('namaBelakang');
            $table->string('namaPanggilan');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('jenisKelamin');
            $table->string('status');
            $table->string('agama');
            $table->string('pendidkan');
            $table->string('alamatId');
            $table->string('alamatDomisili');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('jamsostek');
            $table->string('nomorHp');
            $table->string('nomorDarurat');
            $table->string('email');
            $table->string('createdBy');
            $table->string('updatedBy');
            $table->timestamps();
            $table->string('attribute1');
            $table->string('attribute2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
