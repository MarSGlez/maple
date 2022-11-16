<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\BookFactory;

class Books extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    protected static function newFactory()
    {
        return BookFactory::new();
    }
   	
}
