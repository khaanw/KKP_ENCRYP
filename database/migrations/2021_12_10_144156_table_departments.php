<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->string('idDepartment')->unique();
            $table->string('namaDepertment');
            $table->string('idKaryawan');
            $table->string('cratedBy');
            $table->string('updatedBy');
            $table->string('attribute1');
            $table->string('attribute2');
            $table->string('attribute3');
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
        schema::dropIfExists('departments');
    }
}
