<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected function name(): Attribute{
        return new Attribute(
            get:fn($v) => ucwords($v),
            set:fn($v) => strtolower($v),
        );
    }
    protected function nacionality(){
        return $this->belongsTo(Nacionality::class);
    }
    protected function gender(){
        return $this->belongsTo(Gender::class);
    }
}
