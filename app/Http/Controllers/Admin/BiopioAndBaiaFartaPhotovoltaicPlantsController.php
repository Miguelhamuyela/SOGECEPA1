<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BiopioAndBaiaFartPhotovoltaicPlants;
use Illuminate\Http\Request;

class BiopioAndBaiaFartaPhotovoltaicPlantsController extends Controller
{
    public function show()
    {
        $response['BiopioAndBaiaFartaPhotovoltaicPlants'] = BiopioAndBaiaFartPhotovoltaicPlants::find(1);
        return view('admin.BiopioAndBaiaFartaPhotovoltaicPlants.details.index', $response);
    }

    public function edit($id)

    {
        $response['BiopioAndBaiaFartaPhotovoltaicPlants'] = BiopioAndBaiaFartPhotovoltaicPlants::find($id);
        return view('admin.BiopioAndBaiaFartaPhotovoltaicPlants.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  BiopioAndBaiaFartPhotovoltaicPlants::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/centrais-fotovoltaica-do-biopio-e-baia-farta/show")->with('edit', '1');
    }
}
