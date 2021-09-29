<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articleGov(){
        return view('pages.article.article_gov_registration');
    }

    public function articleFirm(){
        return view('pages.article.article_firm_registration');
    }

    public function articleRenewFirm(){
        return view('pages.article.article_renew_firm_registration');
    }

    public function articleQTFirm(){
        return view('pages.article.article_qt_firm_registration');
    }
}
