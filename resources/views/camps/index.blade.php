@extends('app')

@section('title', '顯示特定陣營')

@section('azur_theme', '您所選取的陣營資料')

@section('azur_contents')
        <h1>顯示所有陣營的視圖(view)</h1>
        <table>
        <tr>
            <th>編號</th>
            <th>名稱</th>
            <th>陣營別</th>
            <th>國家</th>
            <th>操作1</th>
            <th>操作2</th>
        </tr>
        @foreach($camps as $camp)
            <tr>
                <td>{{ $camp->id }}&nbsp;&nbsp;</td>
                <td>{{ $camp->name }}&nbsp;&nbsp;</td>
                <td>{{ $camp->r_or_b }}&nbsp;&nbsp;</td>
                <td>{{ $camp->country }}&nbsp;&nbsp;</td>
                <td><a href="{{ route('camps.show', ['id'=>$camp->id]) }}">詳細資料</a></td>
                <td><a href="{{ route('camps.destroy', ['id'=>$camp->id]) }}">刪除資料</a></td>
            </tr>
        @endforeach
    </table>
@endsection


