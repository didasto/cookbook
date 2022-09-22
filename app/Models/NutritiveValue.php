<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NutritiveValue
 *
 * @property int $id
 * @property float $portion_size
 * @property float $energy
 * @property float $fat
 * @property float $carbohydrates
 * @property float $protein
 * @property float $salt
 * @property int $recipe_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereCarbohydrates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereEnergy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereFat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue wherePortionSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereProtein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereRecipeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereSalt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NutritiveValue whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NutritiveValue extends Model
{

}
