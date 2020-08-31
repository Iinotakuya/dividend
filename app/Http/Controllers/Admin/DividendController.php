<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dividend;

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
        
    // Varidationを行う
    $this->validate($request, Dividend::$rules);
        
    $dividend = new Dividend;
    $form = $request->all();
        
    // フォームから画像が送信されてきたら、保存して、$dividend->image_path に画像のパスを保存する
    if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $dividend->image_path = basename($path);
    } else {
        $dividend->image_path = null;
    }
    
    // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    // フォームから送信されてきたimageを削除する
    unset($form['image']);
    
    // データベースに保存する
    $dividend->fill($form);
    $dividend->save();
        
        return redirect('admin/dividend/create');
    }
    
   public function indexlist(Request $request)
  {
    // すべてのニュースを取得する
        $posts = Dividend::all();

        return view('admin.dividend.indexlist', ['posts' => $posts]);
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
