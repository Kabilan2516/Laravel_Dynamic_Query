<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function insert_form()
    {
        return view('insert_user'); //it just show the insert page form
    }
    public function question_form()
    {
        return view('insert_question');
    }
}
