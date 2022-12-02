@extends('app')

@section('title', '顯示特定陣營')

@section('azur_theme', '您所選取的陣營資料')

@section('azur_contents')
        <h1>顯示所有陣營的視圖(view)</h1>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('camps.create') }} ">新增陣營</a>
    </div>
        <table>
        <tr>
            <th>編號</th>
            <th>名稱</th>
            <th>陣營別</th>
            <th>國家</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>
        @foreach($camps as $camp)
            <tr>
                <td>{{ $camp->id }}&nbsp;&nbsp;</td>
                <td>{{ $camp->name }}&nbsp;&nbsp;</td>
                <td>{{ $camp->r_or_b }}&nbsp;&nbsp;</td>
                <td>{{ $camp->country }}&nbsp;&nbsp;</td>
                <td><a href="{{ route('camps.show', ['id'=>$camp->id]) }}">詳細資料</a></td>
                <td><a href="{{ route('camps.edit', ['id'=>$camp->id]) }}">修改資料</a></td>
                <td>
                    <form action="{{ url('/camps/delete', ['id' => $camp->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        
    </table>
@endsection


