@extends('app')

@section('title' ,'新增特定船艦')

@section('azur_theme')

@section('azur_contents')
    新增艦船
    @include('message.list')
    {!! Form::open(['url' => 'characters/store']) !!}
    @include('characters.form', ['submitButtonText'=>"新增艦船資料"])
    {!! Form::close() !!}
@endsection
