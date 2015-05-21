<ul>
    @foreach($car->comment as $comment)
    <li>{{$comment->name}}<br>{{$comment->comment}} </li>
    @endforeach
</ul>
{{Form::open(['route'=>'postComment'])}}
{{Form::hidden('car_id', $car->id)}}
{{Form::label('name','نام: ')}}
{{Form::text('name',null,['class'=>'form-control'])}}
{{Form::label('comment','دیدگاه: ')}}
{{Form::textarea('comment', null, ['class'=>'form-control'])}}
{{Form::submit('ارسال دیدگاه',['class'=>'btn btn-primary form-control'])}}
{{Form::close()}}