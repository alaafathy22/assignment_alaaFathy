<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;

class Controller_check_availability
{
    function check_availability(Request $request)
    {
        $id_album = $request->id_album;
        $albums = album::with('picture_for_albums')->find($id_album);
        $count_albums = count($albums->picture_for_albums);
        return view('check_availability', compact('count_albums', 'id_album'));
    }
}
