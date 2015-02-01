{{Form::label('service_title','Service Title')}}
@if ($errors->first('service_name'))
    {{$errors->first('service_name')}}<br/>
    {{Form::text('service_name',null,array('size'=>'40','class'=>'form_error'))}}
@else
    {{Form::text('service_name',null,array('size'=>'40'))}}
@endif


{{Form::label('price','Price')}}
@if ($errors->first('price'))
    {{$errors->first('price')}}<br/>
    £ {{Form::text('price',null,array('size'=>'12','class'=>'form_error'))}}
@else
    £ {{Form::text('price',null,array('size'=>'12'))}}   
@endif

{{Form::label('main_category','Main category')}}
@if($errors->first('cat_id'))
    Please select a main category<br/>
@endif
{{ Form::select('cat_id', array('0' => 'Please Select a category') + $cats_list) }}

{{Form::label('sub_category','Sub Category (optional)')}}
{{Form::select('subcat_id', array('0' => 'None') + $cats_list) }}