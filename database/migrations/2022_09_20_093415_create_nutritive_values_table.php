<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('nutritive_values', function (Blueprint $table) {
            $table->id();
            $table->float('portion_size')->default(100);
            $table->float('energy')->default(0);
            $table->float('fat')->default(0);
            $table->float('carbohydrates')->default(0);
            $table->float('protein')->default(0);
            $table->float('salt')->default(0);
            $table->unsignedBigInteger('recipe_id')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nutritive_values');
    }
};
