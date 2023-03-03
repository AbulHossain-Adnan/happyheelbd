<?php

namespace App\Http\Controllers\Admin\Area;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\District;
use App\Models\Admin\Area;

class AreaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }




    public function index()
    {
        return view('admin/area/index', [
            'districts' => District::all(),
            'areas' => Area::all()
        ]);
    }



    public function create()
    {
        $data = Area::OrderBy('id', 'DESC')->get();
        return Response()->json($data);
    }



    public function store(Request $request)
    {
        Area::create($request->input());
        return Response()->json(['success' => 'sdfs']);
    }


    public function edit($id)
    {
        $data_id = Area::find($id);
        return Response()->json($data_id);
    }


    public function updated(request $request)
    {
        $data = dd($request->all());
        return response()->json($data);

        die();

        $id = $request->id;
        Area::find($id)->update(['district_id' => $request->district_id, 'area' => $request->area_name]);
        return back()->with('message', 'area update successfully');
    }
    public function update(Request $request, $id)
    {

        $data = Area::find($id);
        $data->area = $request->area;
        $data->district_id = $request->district_id;
        $data->update();

    }


    public function destroy($id)
    {
        $data = Area::find($id)->delete();
        return Response()->json(['success' => 'success']);

    }

}