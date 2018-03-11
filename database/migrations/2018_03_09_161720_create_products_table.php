<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->string('articulo');
            $table->string('precio');
            $table->string('descripcionCorta')->nullable();
            $table->string('descripcionLarga',2000)->nullable();
            $table->string('keywords')->nullable();
            $table->string('categoria');
            $table->string('imagen');
            $table->string('agotado');
            $table->string('llave',1000);
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
        Schema::dropIfExists('products');
    }
}
