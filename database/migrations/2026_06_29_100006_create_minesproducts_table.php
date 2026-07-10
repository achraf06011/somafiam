<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mines_products', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduct');
            $table->string('imgProduct');
            $table->text('description');
            $table->text('caracteristiques')->nullable();
            $table->string('typeMachine')->nullable();
            $table->unsignedBigInteger('subCategory');
            $table->foreign('subCategory')->references('id')->on('mines_subcategories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mines_products');
    }
};
