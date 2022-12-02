@extends('app')

@section('title')

@section('azur_theme')

@section('azur_contents')
    新增艦船
    {!! Form::open(['url' => 'characters/store']) !!}
    <div class="form-group">
        {!!Form::label('name','艦船名稱:')!!}
        {!!Form::text('name',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('cid','陣營編號:')!!}
        {!!Form::select('cid', $camps)!!}
    </div>
    <div class="form-group">
        {!!Form::label('rank','艦船級別:')!!}
        {!!Form::text('rank',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('type','艦船類型:')!!}
        {!!Form::select('type',array('驅逐'=>'驅逐','戰列'=>'戰列','空母'=>'空母','輕空母'=>'輕空母','輕巡'=>'輕巡','重巡'=>'重巡','潛艦'=>'潛艦','戰巡'=>'戰巡','潛母'=>'潛母'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('get','取得方式:')!!}
        {!!Form::select('get',array('活動建造'=>'活動建造','常駐建造'=>'常駐建造'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('rarity','稀有度:')!!}
        {!!Form::select('rarity',array('普通'=>'N','稀有'=>'R','超稀有'=>'SR','超激稀有'=>'SSR','傳奇稀有'=>'UR',))!!}
    </div>
    <div class="form-group">
        {!!Form::label('build_at','建造所需時間:')!!}
        {!!Form::text('build_at',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('year','年資:')!!}
        {!!Form::number('year',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('displacement','排水量:')!!}
        {!!Form::number('displacement',null)!!}
    </div>
    <div class="form-group">
        {!!Form::submit('新增艦船')!!}
    </div>
    {!! Form::close() !!}
@endsection
