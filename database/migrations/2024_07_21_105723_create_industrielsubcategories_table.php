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
        Schema::create('industriel_subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('nomSubCategory');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('industriel_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industriel_subcategories');
    }
};
