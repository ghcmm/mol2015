<style>
    label
    {
        font-weight:bold;
        padding-bottom:2px;
    }
</style>
{{Form::label('block_title','Title')}}
@if ($errors->first('block_title'))
    {{$errors->first('block_title').'<br/>'}}
    {{Form::text('block_title',null,array('size'=>'40','class'=>'form_error'))}}
@else
    {{Form::text('block_title',null,array('size'=>'40'))}}<br/>
@endif


{{Form::label('block_text','Text to be displayed')}}
@if ($errors->first('block_text'))
    {{$errors->first('block_text').'<br/>'}}
    {{Form::textarea('block_text',null,array('class'=>'form_error','colums'=>'15','id'=>'editor1'))}}
@else
    {{Form::textarea('block_text',null,array('id'=>'editor1'))}}   
@endif
<br/>

{{Form::label('block_active','Display block on screen ',array('style'=>'display:inline-block; width:280px;'))}}{{Form::checkbox('block_active')}}<br>
{{Form::label('notice','Display as a notice ',array('style'=>'display:inline-block; width:280px;'))}}{{Form::checkbox('notice')}}<br>
{{Form::label('block_index','Block Display Number (1 Highest)',array('style'=>'display:inline-block; width:280px;'))}}{{Form::number('block_index',null,array('style'=>'width:40px;'))}}<br>
<script>
    CKEDITOR.replace('editor1', {
        toolbar:
        [
                { name: 'document', items: [ 'Source', '-', 'Preview','-','Style'] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                //{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                //{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },'/',
                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                { name: 'insert', items: [ 'Table', 'SpecialChar'] },
                { name: 'styles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat', 'Format' ] },
                { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                { name: 'about', items: [ 'About' ] } 
        ]
    });
</script>
