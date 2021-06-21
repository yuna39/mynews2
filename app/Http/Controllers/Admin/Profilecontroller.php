<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class Profilecontroller extends Controller
{
    
    // 作成する
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Profile::$rules);
      
        $profile = new Profile;
        $form = $request->all();
      
    //   フォームから送られてきた_tokenを削除する
        unset($form['_token']);
      
    //   データベースに保存する
        $profile->fill($form);
        $profile->save();
      
        return redirect('admin/profile/create');
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
