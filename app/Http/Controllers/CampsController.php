<?php

namespace App\Http\Controllers;
use App\Models\Camp;
use App\Models\Character;
use Request;
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
    public function store()
    {
        $input=Request::all();
        Camp::create($input);
        return redirect('camps');
    }
    public function edit($id)
    {
        $camp = Camp::findOrFail($id);
        $selectR_or_B=$camp->r_or_b;
        $selectCountry=$camp->country;
        return view('camps.edit',['camp'=>$camp,'selectedR_or_B'=>$selectR_or_B,'selectCountry'=>$selectCountry]);
    }
    public function update($id)
    {
        $input=Request::all();
        $camp = Camp::findOrFail($id);

        $camp->name=$input->name;
        $camp->r_or_b=$input->r_or_b;
        $camp->country =$input->country;
        $camp->save();
        return redirect('characters');
    }
}
