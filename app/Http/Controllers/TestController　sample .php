<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

class TestController extends Controller
    {
    // public function index($text ="デフォルト")
    //クエリパラメータで値を受け取るにはindexの引数にRequest $requestと設定する必要あり ↓
    public function index(Request $request) {
        $item = [
            'content' => 'パラメータを渡す',
            // 'param' => $text
            'txt' => 'テキスト',
            'param' => $request->text
        ];
        return view('index', $item);
        }// public function
    }  