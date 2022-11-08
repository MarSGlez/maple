<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'category_id', 'author_id', 'release_date', 'publish_date'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getReleaseDateAttribute($value) {
        return  $value != null ? Carbon::parse($value)->format('d-M-Y') : $value;
    }

    public function getPublishDateAttribute($value) {
        return  $value != null ? Carbon::parse($value)->format('d-M-Y') : $value;
    }
}
