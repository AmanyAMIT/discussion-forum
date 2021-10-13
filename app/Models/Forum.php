<?php

namespace App\Models;

use App\Models\Admin\Category;
use App\Models\User;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'cat_id',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');   
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');   
    }

    public function answers(){
        return $this->hasMany(Answer::class,'forum_id' , 'id');   
    }
}
