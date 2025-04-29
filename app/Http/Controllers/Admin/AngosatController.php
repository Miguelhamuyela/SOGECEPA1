<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Angosat;
use Illuminate\Http\Request;

class AngosatController extends Controller
{
    public function show()
    {
        $response['angosat'] = Angosat::find(1);
        return view('admin.angosat.details.index', $response);
    }

    public function edit($id)

    {
        $response['angosat'] = Angosat::find($id);
        return view('admin.angosat.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);

        $kwenda =  Angosat::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/turismo/show")->with('edit', '1');
    }
}
