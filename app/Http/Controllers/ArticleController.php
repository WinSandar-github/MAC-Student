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

    public function articleResign(){
        return view('pages.article.article_resign_registration');
    }
    public function articleCPATwoOne(){
        return view('pages.article.article_cpa_two_one_pass_year');
    }
    public function articleCPATwoThree(){
        return view('pages.article.article_cpa_two_three_pass_year');
    }
    public function articleCPATwoRenew(){
        return view('pages.article.article_cpa_two_renew');
    }
    public function articleCPAOneTwoRenew(){
        return view('pages.article.article_cpa_one_two_renew');
    }

    public function articleCPAOneTwoRenewUpdate(){
        return view('pages.article.article_cpa_one_two_renew_update');
    }

    public function updateArticleFirm(){
        return view('pages.article.update_article_firm_registration');
    }
    public function updateArticleGov(){
        return view('pages.article.update_article_gov_registration');
    }
    public function updateArticleRenewFirm(){
        return view('pages.article.update_article_renew_firm_registration');
    }
    public function updateArticleQTFirm(){
        return view('pages.article.update_article_qt_firm_registration');
    }
    public function updateArticleResign(){
        return view('pages.article.update_article_resign_registration');
    }
}
