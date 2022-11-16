@extends('app')

@section('title','建立艦船表單')

@section('azur_theme','建立艦船表單')

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
        {!!Form::text('type',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('get','取得方式:')!!}
        {!!Form::text('get',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('rarity','稀有度:')!!}
        {!!Form::text('rarity',null)!!}
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
