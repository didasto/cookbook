<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rezepte.
 *
 * @property int                             $id
 * @property null|\Illuminate\Support\Carbon $created_at
 * @property null|\Illuminate\Support\Carbon $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Rezepte newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rezepte newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rezepte query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rezepte whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rezepte whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rezepte whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Rezepte extends Model
{
    protected $guarded = [
        'id',
    ];
}
