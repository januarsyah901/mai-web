<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keguruans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keguruans', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Keguruan');
            $table->string('slug')->unique(); 
            $table->string('category_id');
            $table->string('nama');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('email');
            // $table->string('tanggal');
            // $table->string('alamat');
            // $table->string('foto')->default('janu');
            // $table->string('notel');
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
        //
    }
}
