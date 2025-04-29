<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['partners'] = Partner::get();
        $this->Logger->log('info', 'Listou Parceiros');

        return view('admin.partners.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Logger
        $this->Logger->log('info', 'Entrou em Criar Parceiros');
        return view('admin.partners.create.index');
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
            'name' => 'required|min:5|max:255',
            'link' => 'required|min:2',
            'image' => 'required|mimes:jpg,png,jpeg,svg'
        ]);

        $file = $request->file('image')->store('Partner');
        $Partner = Partner::create([
            'image' => $file,
            'link' => $request->link,
            'name' => $request->name

        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Parceiro com o nome ' . $Partner->name);

        return redirect("admin/parceiros/show/$Partner->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['partner'] = Partner::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizou um parceiro  com o identificador ' . $id);
        return view('admin.partners.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['partner'] = Partner::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em Editar Parceiro  com o identificador ' . $id);
        return view('admin.partners.edit.index', $response);
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
            'name' => 'required|min:5|max:255',
            'link' => 'required|min:2',
            'image' => 'mimes:jpg,png,jpeg,svg'
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('partner');
        } else {
            $file = Partner::find($id)->image;
        }
        Partner::find($id)->update([
            'image' => $file,
            'link' => $request->link,
            'name' => $request->name

        ]);
        //Logger
        $this->Logger->log('info', 'Editou um parceiro com o identificador ' . $id);
        return redirect("admin/parceiros/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou um Parceiro  com o Identificador ' . $id);
        partner::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
