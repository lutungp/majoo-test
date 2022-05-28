<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_products', function (Blueprint $table) {
            $table->id();
            $table->uuid('product_uuid');
            $table->string('product_name', 100);
            $table->integer('kategori');
            $table->char('product_aktif', 1)->default('y');
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
        Schema::dropIfExists('m_products');
    }
}
