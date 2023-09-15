<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\picture;
use Illuminate\Http\Request;

class Controller_edit_picture
{
    function edit_picture(Request $request)
    {
        $albums = album::get();
        $id_picture = $request->id_picture;
        return view('edit_picture', compact('albums', 'id_picture'));
    }
    function move_picture(Request $request)
    {
        picture::where('id', $request->id_picture)->update([
            'id_album' => $request->id_album,
        ]);
        return redirect("/")->with('success_move_picture', 'the picture has moved');
    }
}
