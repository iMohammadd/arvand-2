<?php
class adminController extends BaseController {
    public function login(){
        return View::make('login');
    }
    public function postLogin() {
        $username = Input::get('username');
        $password = Input::get('password');
        //$auth = Auth::attempt(['username'=>$username, 'password'=>$password]);
        if(Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')])) {
            return Redirect::route('admin');
        } else {
            return Redirect::route('login');
        }
    }

    public function main(){
        $cars = Car::where('name','!=','')->paginate(10);
        return View::make('admin.main')->with(['cars'=>$cars]);
    }

    public function deleteCar($id){
        $car = Car::find($id);
        $car->delete();
        return Redirect::route('admin');
    }

    public  function getAddCar(){
        return View::make('admin.addCar');
    }

    public function postAddCar(){
        $car = new Car;
        $car->name = Input::get('name');
        $car->factory_id = Input::get('factory');
        if(Input::file('image') != null) {
            Input::file('image')->move(public_path() . '/images/cars', $car->id . '.' . Input::file('image')->guessClientExtension());
            $car->image = 'images/cars/' . $car->id . '.' . Input::file('image')->guessClientExtension();
        }
        $car->price = Input::get('price');
        $car->info = Input::get('info');
        $car->save();
        return Redirect::route('admin');
    }

    public function getEditCar($id){
        $car = Car::find($id);
        return View::make('admin.editCar')->with(['car'=>$car]);
    }

    public function postEditCar($id) {
        $car = Car::find($id);
        $car->name = Input::get('name');
        $car->factory_id = Input::get('factory');
        $car->price = Input::get('price');
        $car->info = Input::get('info');
        $car->save();
        return Redirect::route('admin');
    }
    
    public function factory() {
        $factory = Factory::where('name','!=','')->paginate(10);
        return View::make('admin.factoryMain')->with(['factory'=>$factory]);
    }
    
    public function getAddFactory() {
        return View::make('admin.addFactory');
    }

    public function postAddFactory(){
        $factory = new Factory;
        $factory->name = Input::get('name');
        $factory->save();
        return Redirect::route('factory');
    }

    public function getEditFactory($id){
        $factory = Factory::find($id);
        return View::make('admin.editFactory')->with(['factory'=>$factory]);
    }

    public function postEditFactory($id){
        $factory = Factory::find($id);
        $factory->name = Input::get('name');
        $factory->save();
        return Redirect::route('factory');
    }

    public function getDeleteFactory($id){
        $factory = Factory::find($id);
        $cars = Car::where('factory_id','=',$id);
        $cars->delete();
        $factory->delete();
        return Redirect::route('factory');
    }
}