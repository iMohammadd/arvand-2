<div class="row">
                    <div class="content">
                        <fieldset>
                            <legend>تفکیک بر اساس کارخانه</legend>
                        <ul>
                            @foreach($fact as $factory)
                            <li>
                                <a href="#">
                                    @if($factory->logo == '' or $factory->logo == NULL)
                                    <img src="{{asset('asset/image/no-thumbnail.jpg')}}">
                                    @else
                                    <img src="{{asset($factory->logo)}}">
                                    @endif
                                <div>{{$factory->name}}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        </fieldset>
                    </div>
                    </div>