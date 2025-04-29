<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CloudGovern;
use Illuminate\Http\Request;

class CloudGovernController extends Controller
{
    public function show()
    {
        $response['cloudGovern'] = CloudGovern::find(1);
        return view('admin.cloudGovern.details.index', $response);
    }

    public function edit($id)

    {
        $response['cloudGovern'] = CloudGovern::find($id);
        return view('admin.cloudGovern.edit.index',  $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|min:5'

        ]);


        $legislationText =  CloudGovern::find($id)->update([
            'body' => $request->body
        ]);

        return redirect("admin/cloud-do-governo/show")->with('edit', '1');
    }
}
