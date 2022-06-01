<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maderas', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_madera');
            $table->string('categoria');
            $table->string('precio');
            $table->string('suministrador');
            $table->string('foto');
            $table->boolean('stock')->default(true);
           
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
        Schema::dropIfExists('maderas');
    }
};
