{{Form::open()}}
{{Form::label('name', 'نام کارخانه')}}
{{Form::text('name',$factory->name,['class'=>'form-control'])}}
{{Form::submit('ذخیره',['class'=>'form-control btn btn-info'])}}
{{Form::close()}}