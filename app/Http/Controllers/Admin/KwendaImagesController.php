<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Kwenda;
use App\Models\KwendaImages;
use Illuminate\Http\Request;

class KwendaImagesController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        //
        $response['kwenda'] = Kwenda::with(['images'])->find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em Adicionar Imagens ao projecto Kwenda ');
        return view('admin.kwendaImages.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validation = $request->validate([
            'images' => 'required|min:1',
        ]);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];
            $ImageGallery = KwendaImages::create([
                'path' => $file->store("kwendaImages/$id"),
                'fk_idKwenda' => $id
            ]);
        }
        //Logger
        $this->Logger->log('info', 'Cadastrou Imagens em Projecto Kwenda ');
        return redirect("admin/projecto-kwenda/show")->with('create_image', '1');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageGallery  $ImageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma Imagem em Projecto Kwenda com o Id ' . $id);
        KwendaImages::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
