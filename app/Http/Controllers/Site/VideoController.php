<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\PublicityBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['banner'] = PublicityBanner::orderBy('id', 'desc')->limit(6)->get();
        $response['videos'] = Video::orderBy('id', 'desc')->paginate(6);
      return view('site.gallery.video.all.index', $response);
    
    }


}
