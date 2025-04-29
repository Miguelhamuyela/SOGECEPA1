<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\MadeInAngola;

class MadeInAngolaController extends Controller
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
    public function show()
    {
        //
        $response['madeInAngola'] = MadeInAngola::first();
        //Logger
        $this->Logger->log('info', 'Visualizou texto e imagem em Feito em Angola');
        return view('admin.madeInAngola.details.index', $response);
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
        $response['madeInAngola'] = MadeInAngola::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar texto e imagem em Feito em Angola');
        return view('admin.madeInAngola.edit.index', $response);
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
            'body' => 'required|string',
            'image' => 'mimes:jpg,png,jpeg,svg',
        ]);


        if ($file = $request->file('image')) {
            $file = $file->store('image');
        } else {
            $file = MadeInAngola::find($id)->image;
        }

        MadeInAngola::find($id)->update([
            'body' => $request->body,
            'image' => $file
        ]);
        //Logger
        $this->Logger->log('info', 'Editou o texto e imagem em Feito em Angola');

        return redirect()->route('admin.madeInAngola.show')->with('edit', '1');
    }
}
