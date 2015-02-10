{{Form::label('user_name','Change User Name')}}
{{$errors->first('username')}}
{{Form::text('username',null,array('size'=>'40'))}}
