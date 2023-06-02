<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //
    function addData(Request  $req){
    $student= new Student;
    $student->names=$req->names;
    $student->email=$req->email;
    $student->password=$req->password;
    $student->rollno=$req->rollno;
    $student->save();
    }
    
}
