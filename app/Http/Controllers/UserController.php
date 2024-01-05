<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller{

    public function __construct(){

        //$this->middleware('miprimer');
        //$this->middleware('ensure')->only('index', 'showname');
        //$this->middleware('ensure')->except('suma');
    }



    public function index(){
        $name="luis";
        $apellido="bueno";
        $edad=33;
        return view('example',['name' => $name, 'apellido' => $apellido, 'edad' => $edad]);
    }
    
    public function showname($name){
        return view('example', ['name' => $name]);
    }

    public function suma($num = 0){
        $b = 80;
        return $num + $b;
    }
}