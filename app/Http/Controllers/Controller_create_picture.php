<?php

namespace App\Http\Controllers;

use App\Models\picture;
use Illuminate\Http\Request;

class Controller_create_picture
{
    function create_picture(Request $request)
    {
        picture::create([
            'name' => $request->name_picture,
            'id_album' => $request->id_album
        ]);
        return redirect()->back()->with('success_create_picture','Done Added');
    }
}
