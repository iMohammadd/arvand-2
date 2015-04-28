<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index() {
        $fact = Factory::where('name','!=','')->paginate(6);
        $cars = Car::where('name','!=','')->orderBy('id','desc')->paginate(3);
        return View::make('main')->with(['fact'=>$fact, 'cars'=>$cars]);
    }

    public function search() {
        $term = Input::get('term');
        $cars = Car::where('price', '<=', $term)->get();
        return View::make('search')->with(['cars'=>$cars]);
    }

}
