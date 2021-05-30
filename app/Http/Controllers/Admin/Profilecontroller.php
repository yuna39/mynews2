<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Profilecontroller extends Controller
{
    
    // 作成する
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return view('admin.profile.create');
    }
    
    // 編集する
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return view('admin.profile.edit');
    }
}
