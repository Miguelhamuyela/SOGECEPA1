<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    public function show()
    {
        $response['visa'] = Visa::find(1);
        return view('admin.visa.details.index', $response);
    }

    public function edit($id)

    {
        $response['visa'] = Visa::find($id);
        return view('admin.visa.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  Visa::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/visto/show")->with('edit', '1');
    }
}
