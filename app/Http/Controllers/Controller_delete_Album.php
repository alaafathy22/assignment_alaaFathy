<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;

class Controller_delete_Album
{
    function delete_Album(Request $request)
    {
        album::find($request->id_album)->delete();
        return redirect("/")->with('success_delete_album', 'Deleted');
    }
}
