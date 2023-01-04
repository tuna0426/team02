<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Character;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateCharacterRequest;


class CharactersController extends Controller
{
    public function store(CreateCharacterRequest $request)
    {
        $name = $request->input("name");
        $cid=$request->input("cid");
        $rank =$request->input("rank");
        $type=$request->input("type");
        $get=$request->input("get");
        $rarity=$request->input("rarity");
        $build_at=$request->input("build_at");
        $year=$request->input("year");
        $displacement=$request->input("displacement");
        
        $character=Character::create([
            'name'=>$name,
            'cid'=>$cid,
            "rank"=>$rank,
            "type"=>$type,
            "get"=>$get,
            "rarity"=>$rarity,
            "build_at"=>$build_at,
            "year"=>$year,
            "displacement"=>$displacement

        ]);
        return redirect('characters');
    }
    
    public function show($id)
    {
        $character = Character::findOrFail($id);
        $camp = Camp::findOrFail($character->cid);

    return view('characters.show', ['character' => $character, 'camp_name' => $camp->name]);
    }
    public function destroy($id)
    {
        //return $id;
        $character = Character::findOrFail($id);
        $character->delete();
        return redirect('characters');
    }
    public function create()
    {
        $tags= Camp::orderBy('camps.id','asc')->pluck('camps.name','camps.id');
        return view('characters.create',["camps" =>$tags,'character'=>null,'selectedCid'=>null]);
    }
    public function edit($id)
    {
        $character = Character::findOrFail($id);
        $tags= Camp::orderBy('camps.id','asc')->pluck('camps.name','camps.id');
        $selectTags=$character->cid;
        return view('characters.edit',
        ["camps" =>$tags,'character'=>$character,'selectedCid'=>$selectTags]);
    }
    public function update($id,CreateCharacterRequest $request)
    {
        $character = Character::findOrFail($id);

        $character->name = $request->input("name");
        $character->cid=$request->input("cid");
        $character->rank =$request->input("rank");
        $character->type=$request->input("type");
        $character->get=$request->input("get");
        $character->rarity=$request->input("rarity");
        $character->build_at=$request->input("build_at");
        $character->year=$request->input("year");
        $character->displacement=$request->input("displacement");
        $character->save();
        return redirect('characters');
    }
    public function type(Request $request)
    {
        
        $characters = Character::type($request->input('typ'))->get();
        
        $types= Character::alltypes()->pluck('characters.type','characters.type');
        $selectTypes=$types;
        return view('characters.index',['characters'=>$characters,'types'=>$types,'selectTypes'=>$selectTypes,'showpagination'=>false]);
    }
    public function index()
    {
        $characters = Character::paginate(25);
        $types=Character::allTypes()->pluck('characters.type','characters.type');
        return view ('characters.index', ['characters'=>$characters,'types'=>$types,'selectedTypes'=>null,'showpagination'=>true]);
    }

    public function api_characters()
    {
        return Character::all();
    }

    public function api_update(Request $request)
    {
        $character = Character::find($request ->input("id"));
        if ($character == null)
        {
            return response() -> json(['status' => 0,]);
        }
        $character -> name = $request->input('name');
        $character -> rank = $request->input('rank');
        $character -> type = $request->input('type');
        $character -> get = $request->input('get');
        $character -> rarity = $request->input('rarity');
        $character -> build_at = $request->input('build_at');
        $character -> year = $request->input('year');
        $character -> displacement = $request->input('displacement');

        if ($character ->save())
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
        $character = Character::find($request->input('id'));

        if ($character == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        if ($character->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
