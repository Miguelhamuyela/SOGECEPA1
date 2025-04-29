<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function show()
    {
        $response['tourism'] = Tourism::find(1);
        return view('admin.tourism.details.index', $response);
    }

    public function edit($id)

    {
        $response['tourism'] = Tourism::find($id);
        return view('admin.tourism.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);

        $kwenda =  Tourism::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/turismo/show")->with('edit', '1');
    }
}
