@extends('app')

@section('title','編輯特定陣營')

@section('azur_theme','編輯中的陣營')

@section('azur_contents')
    修改特定陣營
    {!! Form::open(['url' => 'camps/update/'.$camp->id,'method'=>'PATCH']) !!}
    <div class="form-group">
        {!!Form::label('name','名稱:')!!}
        {!!Form::text('name',$camp->name)!!}
    </div>
    <div class="form-group">
        {!!Form::label('r_or_b','陣營別:')!!}   
        {!!Form::select('r_or_b', array('赤色中軸'=>'赤色中軸','碧藍航線'=>'碧藍航線'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('country','國家:')!!}
        {!!Form::select('country',array('美國'=>'美國','日本'=>'日本','德國'=>'德國','英國'=>'英國','中華民國'=>'中華民國','蘇聯'=>'蘇聯','義大利'=>'義大利','法國'=>'法國'))!!}
    </div>
    <div class="form-group">
    {!!Form::submit('修改陣營',['class'=>'btn btn-primary from-control'])!!}
    </div>
    {!! Form::close() !!}
@endsection