<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DividendController extends Controller
{
    
    //TOP画面を表示するメソッド
    public function index()
    {
     //admin/devidendディレクトリ配下のindex.blade.phpファイルを呼び出す    
     return view('admin.dividend.index');   
    }
    
    //新規作成画面を表示するメソッド
    public function add()
    {
      //admin/devidendディレクトリ配下のcreate.blade.phpファイルを呼び出す
      return view('admin.dividend.create');
    }
    
    //新規作成画面で入力した内容をDBへ保存するメソッド admin/devidendディレクトリ配下のcreate.blade.phpファイルを呼び出す
    public function create(Request $request)
    {
        return redirect('admin/dividend/create');
    }
    
    //投稿完了を表示する画面　admin/devidendディレクトリ配下のcomplete.blade.phpファイルを呼び出す
    public function complete()
    {
        return view('admin.dividend.complete');
    }
    
    //更新画面を表示するメソッド
    public function edit()
    {
        return view('admin.dividend.edit');
    }

    //更新画面で入力した内容でDBの情報を更新するメソッド
    public function update()
    {
        return redirect('admin/dividend/edit');
    }
}
