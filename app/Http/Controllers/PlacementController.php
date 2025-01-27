<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function index()
    {
        $placements = Placement::all();
        return view('admin.placement.index', compact('placements'));
    }

    public function add()
    {
        return view('admin.placement.add');
    }

    public function store(Request $request)
    {
        $entity = new Placement();
        $entity->high_package = $request->high_package;
        $entity->avg_package = $request->avg_package;
        $entity->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $placement_edit = Placement::where('id', $id)->first();
        return view('admin.placement.edit', compact('placement_edit'));
    }

    public function update(Request $request,$id)
    {
        $placement_update = Placement::where('id', $id)->first();
        $placement_update->high_package = $request->high_package;
        $placement_update->avg_package = $request->avg_package;
        $placement_update->save();

        return redirect()->back();
    }
}
