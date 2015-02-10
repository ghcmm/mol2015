{{Form::label('email','Email Address')}}
{{$errors->first('email')}}
{{Form::text('email',null,array('size'=>'40'))}}
