<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index(){
        return view('operator.home');
    }

    public function index_admin(){
        return view('operator.admin.index');
    }

    public function create_admin(){
        return view('operator.admin.create');
    }
}
