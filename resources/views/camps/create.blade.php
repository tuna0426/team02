@extends('app')

@section('title')

@section('azur_theme')

@section('azur_contents')
    
    {!! Form::open(['url' => 'characters/store']) !!}
    <div class="form-group">
        {!!Form::label('name','名稱:')!!}
        {!!Form::text('name',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('r_or_b','陣營別:')!!}   
        {!!Form::select('r_or_b', array('R'=>'赤色中軸','B'=>'碧藍航線'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('country','國家:')!!}
        {!!Form::select('country',array('A'=>'美國','J'=>'日本','G'=>'德國','E'=>'英國','T'=>'中華民國','S'=>'蘇聯','I'=>'義大利','F'=>'法國'))!!}
    </div>
    <div class="form-group">
        {!!Form::submit('新增陣營')!!}
    </div>
    {!! Form::close() !!}
@endsection

