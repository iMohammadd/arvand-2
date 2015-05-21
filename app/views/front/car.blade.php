@extends('front.master')
@section('title')
اروند خودرو - {{$car->name}}
@endsection
@section('main')
    <div class="row">
        <div class="col-md-4">
<br><br>
            کارخانه سازنده: {{$car->factory->name}}<br><br>
            قیمت خودرو : {{number_format($car->price)}} تومان
        </div>
        <div class="col-md-8">
        <article>
            <h3>{{$car->name}}</h3>
            <a class="thumbnail">
                @if($car->image == '' or $car->image == NULL)
                <img src="{{asset('asset/image/no-thumbnail.jpg')}}">
                @else
                <img src="{{asset($car->image)}}" style="width:100%;">
                @endif
            </a>
            <p>
                {{$car->info}}
            </p>
        </article>
        </div>
        
    </div>
    <div class="row">
        <ol class="breadcrumb">
            <li>{{link_to_route('main','صفحه اصلی')}}</li>
            <li>{{$car->name}}</li>
        </ol>
    </div>
    <div class="row">
        @include('front.comment')
    </div>
@endsection