<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnergieAndWater;
use Illuminate\Http\Request;

class EnergyAndWaterController extends Controller
{
    public function show()
    {
        $response['energyAndWater'] = EnergieAndWater::find(1);
        return view('admin.energyAndWater.details.index', $response);
    }

    public function edit($id)

    {
        $response['energyAndWater'] = EnergieAndWater::find($id);
        return view('admin.energyAndWater.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  EnergieAndWater::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/energia-e-aguas/show")->with('edit', '1');
    }
}
