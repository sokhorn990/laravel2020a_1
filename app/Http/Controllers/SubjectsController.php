<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
   function showSubject(){
       $subjects = array(
        '0'=>array('name'=>'Jave','score'=> 100),
        '1'=> array('name'=> 'JaveScipt','score'=>90),
        '2'=> array('name'=>'PHP','score'=>70),
        '3'=> array('name'=>'Bootstrap','score'=>100),
        '4'=>array('name'=>'Laravel','score'=>100),
        
       );
       return view('pages.subjects',compact('subjects'));
   }
}
