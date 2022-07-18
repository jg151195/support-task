<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportTaskController extends Controller
{
    public function index(){
        return view('support_task.index');
    }
    public function create(){
        return view('support_task.create');
    }
}
