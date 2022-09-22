<?php

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Role;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('unit_id')->references('id')->on('units');
        });
        Schema::table('nutritive_values', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });
        Schema::table('infos', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipes');
        });
        Schema::table('recipes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
        });
        Schema::table('recipes_categories', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeignIdFor(Recipe::class);
            $table->dropForeignIdFor(Unit::class);
        });
        Schema::table('nutritive_values', function (Blueprint $table) {
            $table->dropForeignIdFor(Recipe::class);
        });
        Schema::table('infos', function (Blueprint $table) {
            $table->dropForeignIdFor(Recipe::class);
        });
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
        });
        Schema::table('recipes_categories', function (Blueprint $table) {
            $table->dropForeignIdFor(Recipe::class);
            $table->dropForeignIdFor(Category::class);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeignIdFor(Role::class);
        });
    }
};
