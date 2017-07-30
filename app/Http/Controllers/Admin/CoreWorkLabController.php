<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CoreWorkLabController extends Controller
{
    protected $VIEWDATA;
    public function __construct() {
        $this->VIEWDATA=array();
    }
    public function setData($key,$value){
        $this->VIEWDATA[$key]=$value;
    }
    public function setView($tempname='') {
        $method                     = ''; 
        $currentAction              = \Route::currentRouteAction();
        list($controller, $method)  = explode('@', $currentAction);
        $controller                 = preg_replace('/.*\\\/', '', $controller);
        
      if($tempname != ''){
          return view('Admin.'.$tempname)->with('VIEWDATA', $this->VIEWDATA);  
      }
      return view('Admin.'.$controller.'.'.$method,$this->VIEWDATA);
    }
}
