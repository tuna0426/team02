@extends('app')

@section('title','編輯特定陣營')

@section('azur_theme','編輯中的陣營')

@section('azur_contents')
    修改特定陣營
    {!! Form::model($camp, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CampsController@update', $camp->id]]) !!}
    @include('camps.form', ['submitButtonText'=>"更新陣營資料"])
    {!! Form::close() !!}
@endsection