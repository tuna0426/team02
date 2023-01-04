<?php

namespace App\Http\Controllers;
use App\Models\Camp;
use App\Models\Character;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateCampRequest;
use Illuminate\Http\Request;
class CampsController extends Controller
{
    public function index()
    {
        $camps = Camp::all();
        return view ('camps.index', ['camps'=>$camps]);
    }
    public function show($id)
    {
        $camp = Camp::findOrFail($id);
        $characters = $camp->characters;
        return view('camps.show', ['camp' => $camp, 'characters' => $characters]);
    }
    public function destroy($id)
    {
        $team = Camp::findOrFail($id);
        $team->delete();
        return redirect('camps');
    }
    public function create()
    {
        return view('camps.create');
    }
    public function store(CreateCampRequest $request)
    {
        
        
        $name = $request->input('name');
        $r_or_b=$request->input('r_or_b');
        $country=$request->input('country');
        $camp=Camp::create([
            'name'=>$name,
            'r_or_b'=>$r_or_b,
            'country'=>$country,
        ]);
        return redirect('camps');
    }
    public function edit($id)
    {
        $camp = Camp::findOrFail($id);
        return view('camps.edit',['camp'=>$camp]);
    }
    public function update($id,CreateCampRequest $request)
    {
        
        $camp = Camp::findOrFail($id);

        $camp->name=$request->input("name");
        $camp->r_or_b=$request->input("r_or_b");
        $camp->country =$request->input("country");
        $camp->save();
        return redirect('camps');
    }
    public function api_camps()
    {
        return Camp::all();
    }

    public function api_update(Request $request)
    {
        $camp = Camp::find($request ->input("id"));
        if ($camp == null)
        {
            return response() -> json(['status' => 0,]);
        }
        $camp -> name = $request->input('name');
        $camp -> r_or_b = $request->input('r_or_b');
        $camp -> country = $request->input('country');

        if ($camp ->save())
        {
            return response()-> json(['status' => 1,]);
        }
        else
        {
            return response() -> json(['status' => 0,]);
        }
    }
    public function api_delete(Request $request)
    {
        $camp = Camp::find($request->input('id'));

        if ($camp == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        if ($camp->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
