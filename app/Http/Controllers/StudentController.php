<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller

{
    public   function student(){
   
        $students = \App\Student::all();
        return view('pages.student', compact('students'));
        
    }
    public    function getForm(){
        return view('pages.formPost');
    }

    public  function insertData( Request $request){
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
        ]);
        $students = new Student;
        $students->firstName = $request->get('firstName');
        $students->lastName = $request->get('lastName');
        $students->age = $request->get('age');
        $students->save();

        return redirect('student');
    }
    public  function editForm($id){
        $student = Student::find($id);
        return view('pages.editFornStudent',compact('student'));
    }

    //for update
    public  function updateStudent($id,Request $request){
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
        ]);
        $students = Student::find($id);
        $students->firstName = $request->firstName;
        $students->lastName = $request->lastName;
        $students->age = $request->age;
        $students->save();
        return redirect('student');
    }

    // require
 

    public function deleteStudent($id){
        $students = Student::find($id);
        $students->delete(); 
        return redirect('student');
    }


}
