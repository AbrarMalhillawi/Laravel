<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','type'];
    // protected $fillable = ['name','description','price', 'date', 'to', 'at'];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
