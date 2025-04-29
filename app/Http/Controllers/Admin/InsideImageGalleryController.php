<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\InsideGallery;
use App\Models\InsideImagesGallery;

class InsideImageGalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        //
        $response['insideGallery'] = InsideGallery::with(['images'])->find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em Adicionar Imagens da Galeria com o Identificador ' . $id);
        return view('admin.insideImageGallery.create.index', $response);
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
            'images' => 'mimes:jpg,png,jpeg',
            'description'=>'string|min:4',
            'title' => 'required|string|min:3'

        ]);

        $file = $request->file('path')->store('InsideImageGallery');
        $insideImageGallery = InsideImagesGallery::create([
            'path' => $file,
            'title' => $request->title,
            'description' => $request->description,
            'fk_idInsideGallery' => $id
        ]);


        $this->Logger->log('info', 'Cadastrou Imagens da Galeria com o Identificador ' . $id);
        return redirect("admin/imagens-em-galeria/details/$id")->with('create_image', '1');
    }


    public function details($id){
         //
         $response['insideGallery'] = InsideGallery::with(['images'])->find($id);
         //Logger
         $this->Logger->log('info', 'Visualizou uma Galeria imagens da galeria com o identificador ' . $id);
         return view('admin.insideImageGallery.details.index', $response);
     }


     public function edit($id)
    {
        //

        $response['insideGallery'] = InsideGallery::with(['images'])->find($id);
        $response['insideImageGallery'] = InsideImagesGallery::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma imagem em galeria com o identificador ' . $id);
        return view('admin.insideImageGallery.edit.index', $response);
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
            'description'=>'string|min:4',
            'title' => 'required|string|min:3'
        ]);

        if ($file = $request->file('path')) {
            $file = $file->store('InsideGallery');
        } else {
            $file = InsideImagesGallery::find($id)->path;
        }

        InsideImagesGallery::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'description' => $request->description
        ]);
        //Logger
        $this->Logger->log('info', 'Editou  uma Galeria com o identificador ' . $id);
        return redirect()->back()->with('edit', '1');
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
        InsideImagesGallery::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

}
