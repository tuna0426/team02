@extends('app')

@section('title')

@section('azur_theme')

@section('azur_contents')
    @include('message.list')
    {!! Form::open(['url' => 'camps/store']) !!}
    @include('camps.form', ['submitButtonText'=>'新增陣營資料'])
    {!! Form::close() !!}
@endsection

