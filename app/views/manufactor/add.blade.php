{{Form::open(['files'=>true])}}
{{Form::label('name', 'نام کارخانه')}}
{{Form::text('name',null,['class'=>'form-control'])}}<br>
{{Form::label('logo','لوگوی کارخانه')}}
{{Form::file('logo',['class'=>'form-control'])}}<br>
{{Form::submit('ذخیره',['class'=>'form-control btn btn-info'])}}
{{Form::close()}}