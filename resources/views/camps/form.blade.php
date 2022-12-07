<div class="form-group">
        {!!Form::label('name','名稱:')!!}
        {!!Form::text('name',null)!!}
    </div>
    <div class="form-group">
        {!!Form::label('r_or_b','陣營別:')!!}   
        {!!Form::select('r_or_b', array('赤色中軸'=>'赤色中軸','碧藍航線'=>'碧藍航線'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('country','國家:')!!}
        {!!Form::select('country',array('美國'=>'美國','日本'=>'日本','德國'=>'德國','英國'=>'英國','中華民國'=>'中華民國','蘇聯'=>'蘇聯','義大利'=>'義大利','法國'=>'法國'))!!}
    </div>
    <div class="form-group">
        {!!Form::submit('新增陣營')!!}
    </div>