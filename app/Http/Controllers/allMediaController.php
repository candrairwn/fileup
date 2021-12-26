<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\allMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class allMediaController extends Controller
{
    function Mediasemua(Request $request)
    {
        $medias = DB::table('media')->simplePaginate(9);

        return view('allmedia', ['media' => $medias]);
    }
}
