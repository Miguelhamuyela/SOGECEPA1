<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Legislation;
use App\Classes\Logger;

class LegislationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        
        $response['legislation'] = Legislation::get();
        //Logger
        $this->Logger->log('info', 'Listou as legislações');
        return view('admin.legislation.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar uma Legislação');
        return view('admin.legislation.create.index');
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
            'title' => 'required|min:5|max:255',
            'nameFile' => 'required|min:5|max:255',
            'file' => 'required|mimes:jpg,png,jpeg,pdf',
            'body' => 'required|min:5'
        ]);

        $file = $request->file('file')->store('legislation');

        $legislation = Legislation::create([
            'file' => $file,
            'title' => $request->title,
            'nameFile' => $request->nameFile,
            'body' => $request->body
        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou uma Legislação');
        return redirect("admin/legislacao/show/$legislation->id")->with('create', '1');
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
        $response['legislation'] = Legislation::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Legislação com o identificador ' . $id);
        return view('admin.legislation.details.index', $response);
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
        $response['legislation'] = Legislation::find($id);
         //Logger
         $this->Logger->log('info', 'Entrou em editar uma Legislação com o identificador ' . $id);
        return view('admin.legislation.edit.index', $response);
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
            'title' => 'required|min:5|max:255',
            'nameFile' => 'required|min:5|max:255',
            'file' => 'mimes:jpg,png,jpeg,pdf',
            'body' => 'required|min:5'
        ]);

        


        if ($file = $request->file('file')) {
            $file = $file->store('legislation');
        } else {
            $file = Legislation::find($id)->file;
        }

            Legislation::find($id)->update([
                'file' => $file,
                'title' => $request->title,
                'nameFile' => $request->nameFile,
                'body' => $request->body

        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma legislação com o identificador ' . $id);
        return redirect()->route('admin.legislation.index')->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou uma Legislação com o identificador ' . $id);
        Legislation::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
