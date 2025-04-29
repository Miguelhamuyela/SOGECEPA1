<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agt;
use Illuminate\Http\Request;

class AgtController extends Controller
{
    //

    public function index()
    {

        $response['agt'] = Agt::first();
        return view('site.agt.index', $response);
    }
}
