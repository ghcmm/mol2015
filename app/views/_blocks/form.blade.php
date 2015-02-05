    {{Form::label('firstname','First Name * '.$errors->first('firstname','Required'))}}

    <?php $errclass=($errors->first('firstname'))?'form_err':'';?>
    {{Form::text('firstname',null,array('size'=>26,'class'=>$errclass))}}
    
    
    {{Form::label('lastname','Last Name * '.$errors->first('lastname','Required'))}}
    <?php $errclass=($errors->first('lastname'))?'form_err':'';?>
    {{Form::text('lastname',null,array('size'=>26,'class'=>$errclass))}}
    
    
    {{Form::label('address','Address')}}
    {{Form::textarea('address',null,array('rows'=>5,'style'=>'width:95%;'))}}
    
    {{Form::label('postcode','Post Code')}}
    {{Form::text('postcode',null,array('size'=>20))}}
    
    {{Form::label('phone','Phone Number * '.$errors->first('phone','Required'))}}
    <?php $errclass=($errors->first('phone'))?'form_err':'';?>
    {{Form::text('phone',null,array('size'=>20,'class'=>$errclass))}}
    	
    {{Form::label('mobile','Mobile Number')}}
    {{Form::text('mobile',null,array('size'=>20))}}
    
    {{Form::label('email','Email Address * '.$errors->first('email','Required'))}}
    <?php $errclass=($errors->first('email'))?'form_err':'';?>
    {{Form::email('email',null,array('size'=>40,'class'=>$errclass))}}
    
    {{Form::label('message','Your message for Marie * '.$errors->first('message','Required'))}}
    <?php $errclass=($errors->first('message'))?'form_err':'';?>
    {{Form::textarea('message',null,array('rows'=>5,'style'=>'width:95%;','class'=>$errclass))}}
    <div style="margin-top:15px;"> 
        {{ Form::submit('Submit your message',array('class'=>'button'))}}
        {{ Form::reset('Clear form',array('class'=>'button'))}}
    </div>
    