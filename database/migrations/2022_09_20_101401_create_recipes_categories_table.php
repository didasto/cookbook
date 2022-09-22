<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('recipes_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id')->default(0);
            $table->unsignedBigInteger('category_id')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipes_categories');
    }
};
