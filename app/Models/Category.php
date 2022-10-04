<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @method static Builder newModelQuery()
 * @method static Builder newQuery()
 * @method static Builder query()
 * @method static Category whereId($value)
 * @method static Category[]|null whereName($value)
 * @mixin Eloquent
 */
class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function recipes(): HasMany
    {
        return $this->hasMany('recipes');
    }
}
