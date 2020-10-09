<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'desc',
        'content',
        'image_url',
        'status',
        'student_id'
    ];

    // Function comments the hien moi quan he 1 post se co nhieu comments
    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function students() {
        return $this->hasMany(Student::class,'student_id','id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_post','post_id','category_id');
    }
}
