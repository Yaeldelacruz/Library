<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'editorial_id', 'user_id', 'author_id'];
    protected function name(): Attribute{
        return new Attribute(
            get:fn($v) => ucwords($v),
            set:fn($v) => strtolower($v),
        );
    }
    protected function user(){
        return $this->belongsTo(User::class);
    }
    protected function editorial(){
        return $this->belongsTo(Editorial::class);
    }
    protected function author(){
        return $this->belongsTo(Author::class);
    }
}
