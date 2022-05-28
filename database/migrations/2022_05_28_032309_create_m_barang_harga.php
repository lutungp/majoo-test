<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMBarangHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_barang_harga', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tgl_berlaku');
            $table->timestamp('tgl_berakhir');
            $table->float('harga')->nullable()->default(0);
            $table->integer('created_by');
            $table->timestamp('created_date');
            $table->smallInteger('revised');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_barang_harga');
    }
}
