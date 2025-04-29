<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DamCaculoCabaca;
use Illuminate\Http\Request;

class DamCaculoCabacaController extends Controller
{
    public function show()
    {
        $response['damCaculoCabaca'] = DamCaculoCabaca::find(1);
        return view('admin.damCaculoCabaca.details.index', $response);
    }

    public function edit($id)

    {
        $response['damCaculoCabaca'] = DamCaculoCabaca::find($id);
        return view('admin.damCaculoCabaca.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  DamCaculoCabaca::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/barragem-caculo-cabaca/show")->with('edit', '1');
    }
}