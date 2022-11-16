@extends('app')

@section('title','建立陣營表單')

@section('azur_theme','建立陣營表單')

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
        {!!Form::text('country',null)!!}
    </div>
    <div class="form-group">
        {!!Form::submit('新增陣營')!!}
    </div>
    {!! Form::close() !!}
@endsection


