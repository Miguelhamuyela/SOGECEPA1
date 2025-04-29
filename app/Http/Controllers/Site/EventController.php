<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\News;
use App\Models\PublicityBanner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {

        $dateNow = Carbon::now();
        $response['banner'] = PublicityBanner::orderBy('id', 'desc')->limit(6)->get();
        $response['lastedNews'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(4)->get();
        $response['events'] = Event::where([['state', 'Autorizada']])->orderBy('id', 'desc')->paginate(6);




        return view('site.event.all.index', $response);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        $date = Carbon::now();

        try {

            $response['dateNow'] = Carbon::now();

            $response['lastedNews'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(4)->get();
            $response['banner'] = PublicityBanner::orderBy('id', 'desc')->limit(6)->get();
            $response['events'] = Event::where([['state', 'Autorizada'], ['title', urldecode($title)]])->first();
            $response['lasted'] = Event::where([['state', 'Autorizada'], ['title', '!=', urldecode($title)]])->orderBy('dateEvent', 'desc')->limit(4)->get();
            return view('site.event.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.event');
        }
    }
}
