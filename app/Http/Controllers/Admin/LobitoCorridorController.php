<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LobitoCorridor;
use Illuminate\Http\Request;

class LobitoCorridorController extends Controller
{
    public function show()
    {
        $response['lobitoCorridor'] = LobitoCorridor::find(1);
        return view('admin.lobitoCorridor.details.index', $response);
    }

    public function edit($id)

    {
        $response['lobitoCorridor'] = LobitoCorridor::find($id);
        return view('admin.lobitoCorridor.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  LobitoCorridor::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/corredor-do-lobito/show")->with('edit', '1');
    }
}
