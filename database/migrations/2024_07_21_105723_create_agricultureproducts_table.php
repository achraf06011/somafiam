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
        Schema::create('agriculture_products', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduct');
            $table->string('imgProduct');
            $table->text('description');
            $table->unsignedBigInteger('subCategory');
            $table->foreign('subCategory')->references('id')->on('agriculture_subcategories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agriculture_products');
    }
};
