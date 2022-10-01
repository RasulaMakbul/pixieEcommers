<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function blank()
    {
        return View('admin.blank');
    }
    public function error()
    {
        return View('admin.404error');
    }
    public function dashboard()
    {
        return View('admin.dashboard');
    }


    public function userList()
    {
        return View('admin.userList');
    }
    public function userView()
    {
        return View('admin.userView');
    }
}
