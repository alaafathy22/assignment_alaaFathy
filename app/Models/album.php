<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];
    function picture_for_albums()
    {
        return $this->hasMany(picture::class, 'id_album');
    }
}
