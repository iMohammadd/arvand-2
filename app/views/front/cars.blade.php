<div class="row">
                        <div class="cars">
                            <fieldset>
                                <legend>آخرین خودروهای ثبت شده</legend>
                                @foreach($cars as $car)
                                <article>
                                    <div class="img">
                                        @if($car->image == '' or $car->image == NULL)
                                            <img src="{{asset('asset/image/no-thumbnail.jpg')}}">
                                        @else
                                            <img src="{{asset($car->image)}}">
                                        @endif
                                    </div>
                                    <div class="info">
                                       <h4>{{$car->name}}</h4><small>{{$car->factory->name}}</small>
                                        <hr>
                                        {{number_format($car->price)}} تومان
                                    </div>
                                </article>
                                @endforeach
                            </fieldset>
                        </div>
                    </div>