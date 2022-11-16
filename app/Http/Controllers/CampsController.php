<?php

namespace App\Http\Controllers;
use App\Models\Camp;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
