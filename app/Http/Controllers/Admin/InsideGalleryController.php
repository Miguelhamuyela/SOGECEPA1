<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\InsideGallery;
use Illuminate\Http\Request;
use App\Classes\Logger;

class InsideGalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        //
        $response['gallery'] = Gallery::with(['insideGallery'])->find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em Adicionar Imagens da Galeria com o Identificador ' . $id);
        return view('admin.insideGallery.create.index', $response);
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
            'cover' => 'required|min:1',
            'category' => 'required|string|min:3'

        ]);

        $file = $request->file('cover')->store('Gallery');
        $insideGallery = InsideGallery::create([
            'cover' => $file,
            'category' => $request->category,
            'fk_idGallery' => $id
        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou uma categoria da Galeria com o Identificador ' . $id);
        return redirect("admin/gallery/show/$id")->with('create_image', '1');
    }





    public function edit($id)
    {
        //

        $response['gallery'] = InsideGallery::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma categoria de galeria com o identificador ' . $id);
        return view('admin.insideGallery.edit.index', $response);
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
            'category' => 'required|string|min:3'
        ]);

        if ($file = $request->file('cover')) {
            $file = $file->store('InsideGallery');
        } else {
            $file = InsideGallery::find($id)->cover;
        }

        InsideGallery::find($id)->update([
            'cover' => $file,
            'category' => $request->category,
            'fk_idGallery' => $id
        ]);
        //Logger
        $this->Logger->log('info', 'Editou  uma Galeria com o identificador ' . $id);
        return redirect("admin/gallery/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou uma Imagem da Galeria com o identificador ' . $id);
        InsideGallery::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
