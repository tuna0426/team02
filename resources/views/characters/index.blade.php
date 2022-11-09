@extends('app')

@section('title','顯示特定艦船')

@section('azur_theme','您所選取的艦船資料')

@section('azur_contents')
        <h1>顯示所有艦船的視圖(view)</h1>
    <table>
        <tr>
            <th>編號</th>
            <th>艦船名字</th>
            <th>陣營編號</th><!--key--> 
            <th>艦船級別</th>
            <th>艦船類型</th>
            <th>取得方式</th>
            <th>稀有度</th>
            <th>建造所需時間</th>
            <th>年資</th>
            <th>排水量</th>
            <th>操作1</th>
            <th>操作2</th>
        </tr>
        @foreach($characters as $character)
            <tr>
                <td>{{ $character->id }}&nbsp;&nbsp;</td>
                <td>{{ $character->name }}&nbsp;&nbsp;</td>
                <td>{{ $character->cid }}&nbsp;&nbsp;</td>
                <td>{{ $character->rank }}&nbsp;&nbsp;</td>
                <td>{{ $character->type }}&nbsp;&nbsp;</td>
                <td>{{ $character->get }}&nbsp;&nbsp;</td>
                <td>{{ $character->rarity }}&nbsp;&nbsp;</td>
                <td>{{ $character->build_at }}&nbsp;&nbsp;</td>
                <td>{{ $character->year }}&nbsp;&nbsp;</td>
                <td>{{ $character->displacement }}&nbsp;&nbsp;</td>
                <td><a href="{{ route('characters.show', ['id'=>$character->id]) }}">詳細資料</a></td>
                <td><a href="{{ route('characters.destroy', ['id'=>$character->id]) }}">刪除資料</a></td>
                </tr>
        @endforeach
    </table>
@endsection
