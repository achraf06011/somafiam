<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mines_subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('nomSubCategory');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('mines_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mines_subcategories');
    }
};
