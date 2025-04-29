<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kwenda;
use Illuminate\Http\Request;

class KwendaController extends Controller
{
    public function show()
    {
        $response['kwenda'] = Kwenda::find(1);
        return view('admin.kwenda.details.index', $response);
    }

    public function edit($id)

    {
        $response['kwenda'] = Kwenda::find($id);
        return view('admin.kwenda.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $kwenda =  Kwenda::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/projecto-kwenda/show")->with('edit', '1');
    }
}
