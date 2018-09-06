<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
Use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SpueradminController extends Controller
{
    public function logout()
    {
    	session::flush();
    	return Redirect::to('/admin_login');
    }
}
