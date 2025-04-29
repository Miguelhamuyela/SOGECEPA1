<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchooolsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $response['schools'] = Schools::where([['state', 'Autorizada']])->orderBy('id', 'desc')->paginate(6);


        return view('site.schools.all.index', $response);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        try {


            $response['schools'] = Schools::where([['state', 'Autorizada'], ['title', urldecode($title)]])->first();
            $response['lastedSchools'] = Schools::where([['state', 'Autorizada'], ['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(4)->get();
            return view('site.schools.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.schools');
        }
    }
}
