<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListItemController extends Controller
{
    public function index(){
        return view('list-items.index');
    }
}
