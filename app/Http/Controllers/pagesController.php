<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function action(){
        $action="Action";
        return view('pages.our_action',compact('action'));
    }
    public function join_us(){
        $join="join";
        return view('pages.join_us',compact('join'));
    }
    public function news(){
        $new="news";
        return view('pages.news',compact('new'));
    }
    public function contact_us(){
        $contact= "contact";
        return view('pages.contact_us',compact('contact'));
    }
    public function about_us(){
        $about = "about";
        return view('pages.about_us',compact('about'));
    }
    public function showCustomer(){
        $customer = ['Chandaraty', 'Maly','Samphas'];
        return view('pages.customer',compact('customer'));
    }
    public function listCustomer(){
        // $teachers = ['Chandaraty', 'Maly','Samphas'];
        $StudentsController = array(
            array(0, 'Chandaraty','chandaraty@example.org'),
            array( 1,'Maly','maly@example.org'),
            array(2,'Samphas','samphas@example.org'),
            array( 3,'Donat', 'donat@example.org')
        );
        return view('pages.customer',compact('StudentsController'));
    }
}
