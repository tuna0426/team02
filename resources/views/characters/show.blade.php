@extends('app')

@section('title', $character->name,'顯示特定艦船')

@section('azur_theme', $character->name,'您所選取的艦船資料')

@section('azur_contents')
艦船編號：{{$character->id}}<br/>
艦船名稱：{{$character->name}}<br/>
陣營編號：{{$character->cid}}<br/>
取得方式：{{$character->get}}<br/>
稀有度：{{$character->rank}}<br/>
建造所需時間：{{$character->build_at}}<br/>
@endsection

