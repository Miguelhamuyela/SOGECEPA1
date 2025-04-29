<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Kwenda;
use App\Models\KwendaImages;
use Illuminate\Http\Request;

class KwendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $response["kwenda"]= Kwenda::first();
        $response['kwendaImages'] = KwendaImages::orderBy('id', 'desc')->get();

        return view('site.kwenda.index',$response);
    }


}
