<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->id();
            $table->uuid('kategori_uuid');
            $table->string('kategori_name', 100);
            $table->char('kategori_aktif', 1)->default('y');
            $table->integer('created_by');
            $table->timestamp('created_date');
            $table->integer('updated_by');
            $table->timestamp('updated_date');
            $table->smallInteger('revised');
            $table->integer('disabled_by');
            $table->timestamp('disabled_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kategori');
    }
}
