<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'comment', 'parent_id'];

    // Relasi ke komentar anak
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Relasi ke komentar induk
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }
}