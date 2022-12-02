@extends('app')

@section('title','編輯特定船艦')

@section('azur_theme','編輯中的船艦')

@section('azur_contents')
{!! Form::open(['url' => 'characters/update/'.$character->id,'method'=>'PATCH']) !!}
    <div class="form-group">
        {!!Form::label('name','艦船名稱:')!!}
        {!!Form::text('name',$character->name,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('cid','陣營編號:')!!}
        {!!Form::select('cid', $camps,$selectedCid,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('rank','艦船級別:')!!}
        {!!Form::text('rank',$character->rank,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('type','艦船類型:')!!}
        {!!Form::select('type',array('驅逐'=>'驅逐','戰列'=>'戰列','空母'=>'空母','輕空母'=>'輕空母','輕巡'=>'輕巡','重巡'=>'重巡','潛艦'=>'潛艦','戰巡'=>'戰巡','潛母'=>'潛母'),$selectedType,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('get','取得方式:')!!}
        {!!Form::select('get',array('活動建造'=>'活動建造','常駐建造'=>'常駐建造'),$selectedGet,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('rarity','稀有度:')!!}
        {!!Form::select('rarity',array('普通'=>'N','稀有'=>'R','超稀有'=>'SR','超激稀有'=>'SSR','傳奇稀有'=>'UR',),$selectedRarity,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('build_at','建造所需時間:')!!}
        {!!Form::text('build_at',$character->build_at,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('year','年資:')!!}
        {!!Form::number('year',$character->year,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('displacement','排水量:')!!}
        {!!Form::number('displacement',$character->displacement,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::submit('修改艦船',['class'=>'btn btn-primary from-control'])!!}
    </div>
    {!! Form::close() !!}
    
@endsection
