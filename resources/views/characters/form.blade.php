<div class="form-group">
        {!!Form::label('name','艦船名稱:')!!}
        {!!Form::text('name',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('cid','陣營編號:')!!}
        {!!Form::select('cid', $camps)!!}
    </div>
    <div class="form-group">
        {!!Form::label('rank','艦船級別:')!!}
        {!!Form::text('rank',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('type','艦船類型:')!!}
        {!!Form::select('type',array('DD'=>'驅逐','BB'=>'戰列','CV'=>'空母','CVL'=>'輕空母','CL'=>'輕巡','CA'=>'重巡','SS'=>'潛艦','BC'=>'戰巡','SSV'=>'潛母'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('get','取得方式:')!!}
        {!!Form::select('get',array('活動建造'=>'活動建造','常駐建造'=>'常駐建造'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('rarity','稀有度:')!!}
        {!!Form::select('rarity',array('N'=>'N','R'=>'R','SR'=>'SR','SSR'=>'SSR','UR'=>'UR',))!!}
    </div>
    <div class="form-group">
        {!!Form::label('build_at','建造所需時間:')!!}
        {!!Form::text('build_at',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('year','年資:')!!}
        {!!Form::number('year',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('displacement','排水量:')!!}
        {!!Form::number('displacement',null)!!}
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}