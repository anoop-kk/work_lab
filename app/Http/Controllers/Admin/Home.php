<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CoreWorkLabController;
use App\Models\Role;
use App\User;
use App\Models\Home_model;
use Illuminate\Support\Facades\Auth;

class Home extends CoreWorkLabController
{
    protected $home_model;
    public function __construct()
    {
        
       $this->home_model  = new Home_model;
   }
   public function index(){
    $this->VIEWDATA['title']    = trans('menu.dash_board');
    $this->home_model  = new Home_model;
    return $this->setView();
}
public function assign_role(Request $request) {
    $post_array = array(); 
    $roles = Role::get();
    $users = User::get();
    $this->VIEWDATA['title']    = trans('home.assign_role');
    if($request->isMethod('POST')){
        $post_array = $request->all(); 
        
        $status = $this->home_model->assignRole($post_array);
        if($status){
            redirect()->back()->with('success', trans('home.roles_are_changed'));
        }else{
            redirect()->back()->with('warning',trans('home.failed_to_change_role'));
        }
    }
    $this->setData('roles', $roles);
    $this->setData('users', $users);
    return $this->setView();
}
public function role() {
//hello@neovibe.in
    $this->setData('title',trans('home.role'));
    $roles      = Role::all();
    
    $this->setData('role',$role);
    return $this->setView();
}
}
