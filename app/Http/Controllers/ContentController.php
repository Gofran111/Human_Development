<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use DB;

class ContentController extends Controller
{
    public function admin(){
        $users = User::all();
        return view('content.admin',compact('users'));
    }
   //Add ROles
    public function addRole(Request $request){
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        
        if($request['role_user']){
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        
        if($request['role_editor']){
            $user->roles()->attach(Role::where('name', 'Editor')->first());
        }
        
        if($request['role_admin']){
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }

        return redirect()->back();
    }
//Editor
public function editor(){
    $users = User::all();
    $stop_comments = DB::table('sttings')->where('name', 'stop_comments')->value('value');
    $img = DB::table('sttings')->where('name', 'img')->value('value');
    return view('content.editor', compact('stop_comments','users', 'img'));
}

//Chang Settinds
public function settings(Request $request){
    if($request->stop_comments){
        DB::table('sttings')
            ->where('name', 'stop_comments')
            ->update(['value'=> 1]);
    }
    else{
        DB::table('sttings')
        ->where('name', 'stop_comments')
        ->update(['value'=> 0]);
    }
    if($request->img){
        DB::table('sttings')
            ->where('name', 'img')
            ->update(['value'=> 0]);
    }
    if($request->img1){
        DB::table('sttings')
            ->where('name', 'img')
            ->update(['value'=> 1]);
    }
    if($request->img2){
        DB::table('sttings')
            ->where('name', 'img')
            ->update(['value'=> 2]);
    }
    if($request->img3){
        DB::table('sttings')
            ->where('name', 'img')
            ->update(['value'=> 3]);
    }
    if($request->img4){
        DB::table('sttings')
            ->where('name', 'img')
            ->update(['value'=> 4]);
    }
    if($request->img5){
        DB::table('sttings')
            ->where('name', 'img')
            ->update(['value'=> 5]);
    }
 
    return redirect()->back();
}

//Can not access To this loaction
public function accessDenied(){
    return view('content.access_denied');
}


}
