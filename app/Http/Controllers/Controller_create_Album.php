<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;

class Controller_create_Album
{
    function create_Album(Request $request)
    {
        album::create([
            'name' => $request->name_album
        ]);
        return redirect()->back()->with('success_create_album','Done Added');
    }
}
