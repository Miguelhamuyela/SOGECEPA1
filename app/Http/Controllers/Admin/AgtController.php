<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agt;
use Illuminate\Http\Request;

class AgtController extends Controller
{
    //

    public function show()
    {
        $response['agt'] = Agt::find(1);
        return view('admin.agt.details.index', $response);
    }

    public function edit($id)

    {
        $response['agt'] = Agt::find($id);
        return view('admin.agt.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  Agt::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/agt-imposto-predial/show")->with('edit', '1');
    }
}
