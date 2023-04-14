<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome_page(){
        return view('pages.welcome');
    }

    public function editorial_board_page(){
        return view('pages.editorial-board');
    }

    public function publicationethic_page(){
        return view('pages.publicationethic');
    }

    public function authors_guide_page(){
        return view('pages.authors-guide');
    }

    public function contact_us_page(){
        return view('pages.contact-us');
    }

    public function usp_page(){
        return view('pages.usp');
    }

    public function online_submission_page(){
        return view('pages.online-submission');
    }

    public function in_press_page(){
        return view('pages.in-press');
    }

    public function top_cited_articles_page(){
        return view('pages.top-cited-articles');
    }

    public function archive_page(){
        return view('pages.archive');
    }

    public function archivevolumeview_page(){
        return view('pages.archivevolumeview');
    }
    
    public function archiveabstract_page(){
        return view('pages.archiveabstract');
    }
    
    public function archivefulltext_page(){
        return view('pages.archivefulltext');
    }
    
    public function archivefigure_page(){
        return view('pages.archivefigure');
    }
    
    public function userregistration_page(){
        return view('pages.userregistration');
    }
    
    public function article_sub_form_page(){
        return view('pages.article-sub-form');
    }
    
    public function submitmsg_page(){
        return view('pages.submitmsg');
    }
}

?>