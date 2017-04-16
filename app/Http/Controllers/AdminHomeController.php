<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminHomeController extends Controller
{

	public function __construct()
    {
    	if (! Auth::guard('admin_user')->check()) {
    		return redirect('/admin_login');
    	}
    }


    public function index()
    {
    	return view ('admin-home');
    }
}
