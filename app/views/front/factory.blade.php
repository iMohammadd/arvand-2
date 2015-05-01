@extends('front.master')
@section('title')
اروند خودرو - {{$factory->name}}
@endsection
@section('main')
    <div class="row">
        <h3>خودروهای موجود کارخانه {{$factory->name}}</h3>
        <ul class="list-group">
            @foreach($factory->car as $item)
                <li class="list-group-item"><a href="{{Route('viewCar',['id'=>$item->id, 'name'=>$item->name])}}">{{$item->name}}</a></li>
            @endforeach
        </ul>
    </div>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="{{Route('main')}}">صفحه اصلی</a></li>
        <li>{{$factory->name}}</li>
    </ol>
</div>
@endsection