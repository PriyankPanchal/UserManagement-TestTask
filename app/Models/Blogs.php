<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    public const BLOGS_ID = "id";
    public const USER_ID = "user_id";
    public const TITLE = "title";
    public const DESCRIPTION = "description";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        self::TITLE,
        self::DESCRIPTION,
    ];
}
