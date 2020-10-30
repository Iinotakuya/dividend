<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dividend;
use App\User;
use Illuminate\Support\Facades\Auth;

class DividendController extends Controller
{

    //TOP画面を表示するメソッド
    public function index()
    {
    
    //$user = User::all();
    //dd($user);

    //return response()->json([
    //    'user' => $user
    //]);
    
    
    // すべてのデータを取得.降順に並び替え.ページネーション
    $posts = Dividend::orderBy('id','desc')->paginate(5);
    //$posts = Dividend::sortable()->paginate(5);

        //return view('admin.dividend.welcome', ['posts' => $posts]);
        return view('welcome' , ['posts' => $posts]);
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
    
    $dividend->user_id = $request->user()->id;
    
    // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    // フォームから送信されてきたimageを削除する
    unset($form['image']);
    
    // データベースに保存する
    $dividend->fill($form);
    $dividend->save();
        
        return redirect('admin/dividend/complete');
    }
    
    public function indexlist(Request $request)
    {
        $dividend_title = $request->dividend_title;
            if ($dividend_title != '') {
                // 検索されたら検索結果を取得する companyはカラム
                $dividends = Dividend::where('company', 'like', "%$dividend_title%")->get();
            } else {
                // それ以外はすべてのニュースを取得する
                $dividends = Dividend::all();
            }

        return view('admin.dividend.indexlist', ['dividends' => $dividends]);
    }
    
    //業種検索
     public function category(Request $request)
    {
        $dividend_category = $request->dividend_category;
        $dividends = Dividend::where('Industry', $dividend_category)->get();
        
        return view('admin.dividend.indexlist', ['dividends' => $dividends]);
    }
    
    //投稿の詳細内容表示
    public function show(Request $request)
    {
        $dividend = Dividend::find($request->id);
            if (empty($dividend)) {
            abort(404);
        }
        return view('admin.dividend.show', ['dividend_form' => $dividend]);
    }
    
    //mypageを表示
    public function mypage(Request $request)
    {
    
        $user = User::find($request->id);
        $posts = Dividend::where('user_id',$user->id)->orderBy('id','desc')->paginate(5);
    
        return view('admin.dividend.mypage', ['posts' => $posts]);
    }
    
    //投稿完了を表示する画面　admin/devidendディレクトリ配下のcomplete.blade.phpファイルを呼び出す
    public function complete()
    {
        return view('admin.dividend.complete');
    }
    
    public function edit(Request $request)
    {
    
        $dividend = Dividend::find($request->id);
        if (empty($dividend)) {
            abort(404);
        }
        
        return view('admin.dividend.edit',['dividend_form' => $dividend]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Dividend::$rules);
        // Dividend Modelからデータを取得する
        $dividend = Dividend::find($request->id);
        // 送信されてきたフォームデータを格納する
        $dividend_form = $request->all();
        if ($request->remove == 'true') {
            $dividend_form['image_path'] = null;
    } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $dividend_form['image_path'] = basename($path);
    } else {
            $dividend_form['image_path'] = $dividend->image_path;
    }

      unset($dividend_form['image']);
      unset($dividend_form['remove']);
      unset($dividend_form['_token']);
      // 該当するデータを上書きして保存する
      $dividend->fill($dividend_form)->save();
      return redirect('admin/dividend/mypage/1');
    }
    
    //投稿データ削除
    public function delete(Request $request)
    {
        $dividend = Dividend::find($request->id);
        $dividend->delete();
        
        
        return redirect('admin/dividend/mypage/1');
    }
}