<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DamLauca;
use Illuminate\Http\Request;

class DamLaucaController extends Controller
{
    public function show()
    {
        $response['damLauca'] = DamLauca::find(1);
        return view('admin.damLauca.details.index', $response);
    }

    public function edit($id)

    {
        $response['damLauca'] = DamLauca::find($id);
        return view('admin.damLauca.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  DamLauca::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/barragem-de-lauca/show")->with('edit', '1');
    }
}
