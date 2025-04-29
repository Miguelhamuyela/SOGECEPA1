<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Angosat;
use App\Models\BiopioAndBaiaFartPhotovoltaicPlants;
use App\Models\CloudGovern;
use App\Models\DamCaculoCabaca;
use App\Models\DamLauca;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Kwenda;
use App\Models\LobitoCorridor;
use App\Models\News;
use App\Models\SlideShow;
use App\Models\Tourism;
use App\Models\Visa;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('site.search.index');
    }

    public function find(Request $request)
    {
        $validation = $request->validate([
            'search' => 'required|string|min:3|max:255',

        ]);

        $response['search'] = $request->search;
        $response['news'] = News::query()->where([['state', 'Autorizada'], ['title', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();
        $response['events'] = Event::query()->where([['state', 'Autorizada'], ['title', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();

        $response['galleries'] = Gallery::query()->where([['name', 'LIKE', "%{$request->search}%"]])->get();
        $response['slideshows'] = SlideShow::query()->where([['title', 'LIKE', "%{$request->search}%"]])->get();

        $response['kwenda'] = Kwenda::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['visa'] = Visa::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();
        $response['cloudGovern'] = CloudGovern::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['tourism'] = Tourism::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['angosat'] = Angosat::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['lobitoCorridor'] = LobitoCorridor::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['damLauca'] = DamLauca::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['damCaculoCabaca'] = DamCaculoCabaca::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();

        $response['photovoltaicPlant'] = BiopioAndBaiaFartPhotovoltaicPlants::query()->where([['body', 'LIKE', "%{$request->search}%"]])->get();





        return view('site.search.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
