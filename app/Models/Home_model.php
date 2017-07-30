<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Role;
use App\User;
class Home_model extends Model
{
    protected $role;
    public function __construct() {
        $this->role = new Role;
    }
    public function assignRole($post_array) {
       
        $role_id  = isset($post_array['role'])?$post_array['role']:'';
        $users[]    = isset($post_array['users'])?$post_array['users']:array();
       
        try{
            foreach ($users as $user){
                $user_obj   = $this->getUser($user);
                
                if($user_obj->roles->first()->name){
                    $this->changeRole($user,$role_id);
                }
                else{
                    $user_obj->roles()->attach($role_id);
                }
            }
        }catch(\Exception $e){
            dd($e->getMessage());
        }
        return true;
        
        
    }
    public function getUser($user_id) {
        $user_obj = User::where('id','=',$user_id)
                ->first();
        return $user_obj;
    }
    public function changeRole($user,$role) {
        $status = DB::table('role_user')
                ->where('user_id',$user)
                ->update([
                    'role_id'=>$role
                ]);
        return $status;
    }
}
