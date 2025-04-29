<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LegislationText;

class LegislationTextController extends Controller
{
    public function show()
    {
        $response['legislationText'] = LegislationText::find(1);
        return view('admin.legislationText.details.index', $response);
    }

    public function edit($id)

    {
        $response['legislationText'] = LegislationText::find($id);
        return view('admin.legislationText.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  LegislationText::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/texto-em-legislacao/show")->with('edit', '1');
    }
}
