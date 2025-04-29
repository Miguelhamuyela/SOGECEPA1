<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Aboutangola;
use App\Models\Event;
use Illuminate\Http\Request;

class AboutAngolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $response["about_angolans"]= Aboutangola::first();
      //  return view('site.aboutangola.index',$response);


        return view('site.aboutangola.index');
    }

    public function checkEvent(){





    }


}
