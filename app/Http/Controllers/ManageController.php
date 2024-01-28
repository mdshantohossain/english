<?php

namespace App\Http\Controllers;

use App\Models\Manage;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        return view('admin.manage.index');
    }

    public function create(Request $request)
    {
        Manage::newHotel($request);
        return back()->with('message', 'Hotel create successful');
    }

    public function manage()
    {
        return view('admin.manage.manage', [
            'manages' => Manage::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.manage.edit', [
            'manage' => Manage::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Manage::updateHotel($request, $id);
        return redirect('/manage/manage')->with('message', 'Hotel update successful');
    }

    public function delete($id)
    {
        Manage::deleteHotel($id);
        return back()->with('message', 'Hotel delete successful');
    }
}
