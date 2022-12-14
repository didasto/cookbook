<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;

/**
 * App\Models\User.
 *
 * @property int                                                   $id
 * @property string                                                $name
 * @property string                                                $email
 * @property null|Carbon                                           $email_verified_at
 * @property string                                                $password
 * @property null|string                                           $remember_token
 * @property null|Carbon                                           $created_at
 * @property null|Carbon                                           $updated_at
 * @property DatabaseNotification[]|DatabaseNotificationCollection $notifications
 * @property null|int                                              $notifications_count
 * @property Collection|PersonalAccessToken[]                      $tokens
 * @property null|int                                              $tokens_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $role_id
 * @property-read Collection|\App\Models\Recipe[] $recipes
 * @property-read int|null $recipes_count
 * @property-read \App\Models\Role $role
 * @method static Builder|User whereRoleId($value)
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
