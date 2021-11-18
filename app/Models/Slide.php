<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $table = 'slide';

    protected $fillable = [
        'judul_slide', 'link','status','gambar_slide'
    ];

    protected $hidden =[];
    
}
