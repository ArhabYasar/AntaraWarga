<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role'
    ];

    protected $table = 'users';

    protected $timestamp = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function vote(): HasMany
    {
        return $this->hasMany(Vote::class, 'user_id', 'id');
    }
    public function iuran(): HasMany
    {
        return $this->hasMany(Iuran::class, 'user_id', 'id');
    }
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
    public function pengingat(): HasMany
    {
        return $this->hasMany(Pengingat::class, 'user_id', 'id');
    }
    public function pembayaran(): HasMany
    {
        return $this->hasMany(Pembayaran::class, 'pembayaran_id', 'id');
    }
}
