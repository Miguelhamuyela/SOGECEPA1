<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Partner;
use App\Models\Event;
use App\Models\Legislation;
use App\Models\SlideShow;
use Carbon\Carbon;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['dateNow'] = Carbon::now();

        $response['legislation'] = Legislation::orderBy('id', 'desc')->paginate(3);
        $response['slideshows'] = SlideShow::orderBy('id', 'desc')->get();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(8)->get();
        $response['event'] = Event::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(6)->get();

        $response['partner']= Partner::orderBy('name', 'asc')->get();

        return view('site.home.index', $response);
    }
}
