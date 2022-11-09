@extends('app')

@section('title', '顯示特定陣營')

@section('azur_theme', '您所選取的陣營資料')

@section('azur_contents')
編號：{{$camp->id}}<br/>
名稱：{{$camp->name}}<br/>
國家：{{$camp->country}}<br/>
@endsection