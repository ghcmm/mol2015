{{Form::label('name','Category Title')}}
{{$errors->first('name')}}
{{Form::text('name',null,array('size'=>'40'))}}

{{Form::label('description','Category Description (Optional)')}}
{{$errors->first('description')}}
{{Form::textarea('descritption',null,array('style'=>'width:95%'))}}
