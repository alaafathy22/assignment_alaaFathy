<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album_picture extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_album',
        'id_picture',
    ];
}
