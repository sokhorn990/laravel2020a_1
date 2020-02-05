<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public $studetns = array('Preab','Sovath','Reach','Rith','Kanha');

    public function showStudent(){
        // $students =['Preab','Sovath','Reach','Rith','Kanha'];
        return view("pages.student")->with('studetns',$this->studetns);
    }

    public function searchStudent($name){
        $result = "";
        $result =  $name." Don't have in the list";
       foreach($this->studetns as $student){
            if ($student==$name) {
                $result = $name." is in the list";
                break;
            }
        }
        return $result;
        
    }


}



