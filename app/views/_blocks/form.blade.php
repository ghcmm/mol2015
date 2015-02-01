    {{Form::label('firstname','First Name * '.$errors->first('firstname','Required'))}}
    {{Form::text('firstname',null,array('size'=>26))}}
    
    
    {{Form::label('lastname','Last Name * '.$errors->first('lastname','Required'))}}
    {{Form::text('lastname',null,array('size'=>26))}}
    
    
    {{Form::label('address','Address')}}
    {{Form::textarea('address',null,array('rows'=>5,'style'=>'width:95%;'))}}
    
    {{Form::label('postcode','Post Code')}}
    {{Form::text('postcode',null,array('size'=>20))}}
    
    {{Form::label('phone','Phone Number * '.$errors->first('phone','Required'))}}
    {{Form::text('phone',null,array('size'=>20))}}
    	
    {{Form::label('mobile','Mobile Number')}}
    {{Form::text('mobile',null,array('size'=>20))}}
    
    {{Form::label('email','Email Address * '.$errors->first('email','Required'))}}
    {{Form::email('email',null,array('size'=>40))}}
    
    {{Form::label('message','Your message for Marie * '.$errors->first('message','Required'))}}
    {{Form::textarea('message',null,array('rows'=>5,'style'=>'width:95%;'))}}
    <div> 
        {{ Form::submit('Submit your message',array('class'=>'button'))}}
        {{ Form::reset('Clear form',array('class'=>'button'))}}
    </div>
    