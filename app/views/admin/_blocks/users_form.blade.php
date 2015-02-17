{{Form::label('user_name','User Name')}}
{{$errors->first('username')}}
{{Form::text('username',null,array('size'=>'40'))}}

{{Form::label('email','Email Address')}}
{{$errors->first('email')}}
{{Form::text('email',null,array('size'=>'40'))}}

{{Form::label('password','Password')}}
{{$errors->first('password')}}
{{Form::password('password',null,array('size'=>'40'))}}