<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    use HasFactory;

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }
}
