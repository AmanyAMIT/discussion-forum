<?php

namespace App\Models;

use App\Models\Admin\Category;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Answer;
use App\Models\Forum;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function forums()
    {
        return $this->hasMany(Forum::class, 'user_id' , 'id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'user_id' , 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id' , 'id');
    }
}
