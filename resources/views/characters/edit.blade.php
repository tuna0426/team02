@extends('app')

@section('title','編輯特定船艦')

@section('azur_theme','編輯中的船艦')

@section('azur_contents')
    @include('message.list')
    {!! Form::model($character, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CharactersController@update', $character->id]]) !!}
    @include('characters.form', ['submitButtonText'=>"更新艦船資料"])
    {!! Form::close() !!}
    
@endsection
