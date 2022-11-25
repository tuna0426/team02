@extends('app')

@section('title', '顯示特定陣營')

@section('azur_theme', '您所選取的陣營資料')

@section('azur_contents')
編號：{{$camp->id}}<br/>
名稱：{{$camp->name}}<br/>
國家：{{$camp->country}}<br/>
顯示所有陣營<br/>
<table>
        <tr>
            <th>編號</th>
            <th>艦船名字</th>
            <th>陣營</th><!--key--> 
            <th>陣營所屬國家</th>
            <th>艦船級別</th>
            <th>艦船類型</th>
            <th>取得方式</th>
            <th>稀有度</th>
            <th>建造所需時間</th>
            <th>年資</th>
            <th>排水量</th>
        </tr>
        @foreach($characters as $character)
            <tr>
                <td>{{ $character->id }}&nbsp;&nbsp;</td>
                <td>{{ $character->name }}&nbsp;&nbsp;</td>
                <td>{{ $character->camp->name }}&nbsp;&nbsp;</td>
                <td>{{ $character->camp->country}}&nbsp;&nbsp;</td>
                <td>{{ $character->rank }}&nbsp;&nbsp;</td>
                <td>{{ $character->type }}&nbsp;&nbsp;</td>
                <td>{{ $character->get }}&nbsp;&nbsp;</td>
                <td>{{ $character->rarity }}&nbsp;&nbsp;</td>
                <td>{{ $character->build_at }}&nbsp;&nbsp;</td>
                <td>{{ $character->year }}&nbsp;&nbsp;</td>
                <td>{{ $character->displacement }}&nbsp;&nbsp;</td>
                </tr>
        @endforeach
    </table>
@endsection