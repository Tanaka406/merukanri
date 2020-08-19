<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseinputController extends Controller
{
     public function add()
  {
      return view('purchaseinput');
  }

 public function create(Request $request)
  {
​
      // 以下を追記
      // Varidationを行う
      $this->validate($request, Purchaseinput::$rules);
​
      $purchaseinput = new Purchaseinput;
      $form = $request->all();
​
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
​
      // データベースに保存する
      $news->fill($form);
      $news->save();
​
      return redirect('purchaseinput');
  }
}
