<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $dates = ['deleted_at'];

    public const USER_ID = "user_id";
    public const FIRST_NAME = "first_name";
    public const LAST_NAME = "last_name";
    public const DOB = "dob";
    public const EMAIL = "email";
    public const PASSWORD = "password";
    public const REMEMBER_TOKEN = "remember_token";
    public const EMAIL_VERIFIED_AT = "email_verified_at";
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::FIRST_NAME,
        self::LAST_NAME,
        self::DOB,
        self::EMAIL,
        self::PASSWORD,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        self::PASSWORD,
        self::REMEMBER_TOKEN,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        self::EMAIL_VERIFIED_AT => 'datetime',
    ];

    public function blogs() {
        return $this->hasMany(Blogs::class, Blogs::BLOGS_ID, User::USER_ID)->where(Blogs::USER_ID, Auth::user()->id);
    }
}
