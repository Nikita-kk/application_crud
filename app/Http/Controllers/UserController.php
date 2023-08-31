<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function user(){
    return view('user');
  }
   public function store(Request $request){
    $data=new User();
    $data->fullname=$request->fullname;
    $data->password=$request->password;
    $data->email=$request->email;
    $data->mobileno=$request->mobileno;
    $data->address=$request->address;
    $data->save();
    return redirect()->route('table');
   }
    public function table(){
        $data=User::all();
        return view('table',compact('data'));
    }
     public function edit($id){
        $data=User::find($id);
        return view('edit',compact('data'));
     }
     public function update(Request $request,$id){
        $data=User::find($id);
        $data->fullname=$request->fullname;
        $data->password=$request->password;
        $data->email=$request->email;
        $data->mobileno=$request->mobileno;
        $data->address=$request->address;
        $data->save();
        return redirect()->route('table');

}
   public function delete($id){
    $data=User::find($id);
    $data->delete();
    return redirect()->route('table');

   }
}
