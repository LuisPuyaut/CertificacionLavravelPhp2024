<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
   {
        Schema::create('docente', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 255)->nullable(false);
            $table->string('apellido', 255)->nullable(false);
            $table->string('email', 255)->unique()->nullable(false);
            $table->string('password', 255)->nullable(false);

        });
   }
     
    public function down(): void
    {
        Schema::dropIfExists('docente');
    }
};
