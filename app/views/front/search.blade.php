<div class="row">
                        <div class="search">
                        <fieldset>
                            <legend>جستجو بر اثاث قیمت</legend>
                            {{Form::open(['route'=>'search'])}}
                                <div class="input-group">
                                    {{Form::text('term',null,['class'=>'form-control', 'placeholder'=>'سقف بودجه'])}}
                                    <span class="input-group-btn">
                                        {{Form::submit('بگرد',['class'=>'btn btn-primary'])}}
                                    </span>
                                </div>
                            {{Form::close()}}
                        </fieldset>
                    </div>
                    </div>