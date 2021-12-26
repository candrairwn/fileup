<?php

namespace App\Http\Controllers;

use App\Models\Media;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaLibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Get Media Library page
     * @return View
     */
    public function mediaLibrary(Request $request)
    {
        $user_obj = auth()->user();

        $media_obj = $user_obj->Media->all();
        return view('medialibrary', ['user_obj' => $user_obj, 'media_obj' => $media_obj]);
    }
}
