{{Form::open(['files'=>true])}}
{{Form::label('name','نام خودرو')}}
{{Form::text('name',$car->name,['class'=>'form-control'])}}
{{Form::label('factory','کارخانه تولید کننده')}}
{{Form::select('factory', Factory::lists('name', 'id'),$car->factory_id,['class'=>'form-control'])}}
{{Form::label('price','قیمت')}}
{{Form::text('price',$car->price,['class'=>'form-control'])}}
{{Form::label('image', 'تصویر')}}
{{Form::file('image',['class'=>'form-control'])}}
{{Form::label('info','توضیحات')}}
{{Form::textarea('info',null,['class'=>'form-control ckeditor'])}}
{{Form::submit('ذخیره',['class'=>'form-control btn btn-info'])}}
{{Form::close()}}