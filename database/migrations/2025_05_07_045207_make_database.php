<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('layanan_satuan', function (Blueprint $table) {
            $table->id();
            $table->string('Tipe'); 
            $table->integer('Regular');  
            $table->integer('One_Day');    
            $table->integer('Express');  
            $table->integer('Quick');  
            $table->timestamps();
        });
        Schema::create('Daily_kiloan', function (Blueprint $table) {
            $table->id();
            $table->string('Layanan');   
            $table->integer('Regular'); 
            $table->integer('One_Day');   
            $table->integer('Express'); 
            $table->integer('Quick'); 
            $table->timestamps();
        });
        Schema::create('FAQ', function (Blueprint $table) {
            $table->id();
            $table->string('Pertanyaan');   
            $table->string('Jawaban'); 
            $table->timestamps();
        });
        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
