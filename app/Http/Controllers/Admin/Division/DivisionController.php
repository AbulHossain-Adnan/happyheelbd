<?php
namespace App\Http\Controllers\Admin\Division;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Division;

class DivisionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin/division/index', [
            'divisions' => Division::all()
        ]);
    }
    public function create()
    {
        $data = Division::OrderBy('id', 'DESC')->get();
        return Response()->json($data);
    }
    public function store(Request $request)
    {

        Division::create($request->input());
        return Response()->json(['success' => 'data added']);
    }
    public function edit($id)
    {
        $data = Division::findOrFail($id);
        return Response()->json($data);
    }
    public function updated(Request $request)
    {
        $id = $request->id;
        $data = Division::find($id);
        // $data->division = $request->division_name;
        $data->update([
            'division' => $request->division_name
        ]);

        return back()->with('message', 'division update successfully');
    }
    public function update(Request $request, $id)
    {
        $data = Division::findOrFail($id);
        $data->division = $request->division;
        $data->save();
        return Response()->json(['success' => 'sdfs']);
    }
    public function destroy($id)
    {

        $data = Division::findOrFail($id);
        $data->delete();
        return Response()->json(['success' => 'sdfs']);
    }
}