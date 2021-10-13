<?php

namespace App\Models\Admin;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'version_no'
    ];

    public function forums()
    {
        return $this->hasMany(Forum::class, 'cat_id' , 'id');
    }
}
