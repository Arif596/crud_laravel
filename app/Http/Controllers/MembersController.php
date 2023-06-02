<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    // Add Data:
    function add(Request $req){
$member=new  Member;
$member->name=$req->name;
$member->email=$req->email;
$member->password=$req->password;
$member->save();
return redirect('add');
//show Data:
    }
    function showData(){
        return Member::all();
    }
    //show Data in form of table:
        function express(){
            $data=Member::all();
            return view ('contact',['members'=>$data]);
        }
        //Delete Function:
        function delete($id){
        $data=Member::find($id);
        $data->delete();
        return redirect('contact');
        }
        //Update function:
        function showforUpdate($id){
        $data= Member::find($id);  
        return view('edit',['data'=>$data]);
        }
        function update(Request $req){
            $data= Member::find($req->id);
            $data->name =$req->name;
            $data->email =$req->email;
            $data->password =$req->password;
            $data->save();
            return redirect('contact');

        }
}
