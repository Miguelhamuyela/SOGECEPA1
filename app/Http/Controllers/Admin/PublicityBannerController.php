<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PublicityBanner;
use App\Classes\Logger;

class PublicityBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['publicityBanner'] = PublicityBanner::orderBy('id', 'desc')->get();
        //Logger
        $this->Logger->log('info', 'Listou os Banners Publicitários');
        return view('admin.publicityBanner.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar Galeria');
        return view('admin.publicityBanner.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'image' => 'mimes:jpg,png,jpeg'
        ]);


        $file = $request->file('image')->store('PublicityBanner');
        $gallery = PublicityBanner::create([
            'image' => $file
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Banner Publicitário com o nome ' . $gallery->name);
        return redirect("admin/banner-publicitario/show/$gallery->id")->with('create', '1');
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
        $response['publicityBanner'] = PublicityBanner::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Banner Publicitário com o identificador ' . $id);
        return view('admin.publicityBanner.details.index', $response);
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
        $response['publicityBanner'] = PublicityBanner::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Banner Publicitário com o identificador ' . $id);
        return view('admin.publicityBanner.edit.index', $response);
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
        $validation = $request->validate([
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('PublicityBanner');
        } else {
            $file = PublicityBanner::find($id)->image;
        }

        PublicityBanner::find($id)->update([
            'image' => $file
        ]);
        //Logger
        $this->Logger->log('info', 'Editou  um Banner Publicitário com o identificador ' . $id);
        return redirect("admin/banner-publicitario/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Banner Publicitário com o identificador ' . $id);
        PublicityBanner::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
