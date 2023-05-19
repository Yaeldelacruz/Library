<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected function type(): Attribute{
        return new Attribute(
            get:fn($v) => ucwords($v),
            set:fn($v) => strtolower($v),
        );
    }
    protected function editorials(){
        return $this->hasMany(Editorial::class);
    }
}
