<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function home()
    {
        $albums = album::with('picture_for_albums')->get();
        return view('index', compact('albums'));
    }
}
