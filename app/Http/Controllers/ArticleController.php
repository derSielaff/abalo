<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleController
{
    public function search(Request $request) {
        $search = "Test";

        $search = $request->input('search');
        $search = str::lower($search);

        $articles = DB::table('ab_article')->whereRaw('LOWER(ab_name) like ?', '%'. $search .'%')->get();
        //var_dump($articles);
        return view('article', ['articles' => $articles]);
    }
}
