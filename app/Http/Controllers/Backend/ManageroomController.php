<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageroomController extends Controller
{
    public function manageroom(){
        return view('admin.layouts.manageroom');
    }
}
