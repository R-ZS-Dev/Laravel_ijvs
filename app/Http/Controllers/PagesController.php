<?php

namespace App\Http\Controllers;
use App\Models\Archive;
use App\Models\Yyear;
use App\Models\Inpress;
use App\Models\TopCitedArticle;
use App\Models\ReceivedArticles;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome_page(){
        $wlcm_records=Archive::with('archive_figure')->orderby('id','DESC')->take(6)->get();
        // dd($wlcm_records);
        return view('pages.welcome')->with([
            'wlcm_lists' => $wlcm_records
        ]);
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

    public function submit_msg(){
        return view('pages.submitmsg');
    }

    public function online_submission_page(Request $request){
        // ReceivedArticles::create([
        //     'table_name' => $request->table,
            
        // ]);
        return view('pages.online-submission');
    }

    public function in_press_page(){
        $inpress_records=Inpress::get();
        return view('pages.in-press')->with([
            'inpress_lists' => $inpress_records
        ]);
    }

    public function top_cited_articles_page(){
        $top_cited_records=TopCitedArticle::get();
        return view('pages.top-cited-articles')->with([
            'topcited_lists' => $top_cited_records
        ]);
    }

    public function archive_page(){
        $archive=Yyear::with('volumes')->get();
        // return response()->json(['sdf' => $archive]);
        return view('pages.archive')->with([
            'year_lists' => $archive
        ]);
    }

    public function archivevolumeview_page($id){
        $archive=Archive::with('volumes', 'years')->where('vvolume_id',$id)->get();
        return view('pages.archivevolumeview')->with([
            'archives' => $archive
        ]);
    }
    
    public function archiveabstract_page(Archive $id){
        return view('pages.archiveabstract')->with(['archive' => $id]);
    }
    
    public function archivefulltext_page(Archive $id){
        return view('pages.archivefulltext')->with(['archive' => $id]);
    }
    
    public function archivefigure_page(){
        return view('pages.archivefigure');
    }
    
    public function userregistration_page(){
        return view('pages.userregistration');
    }
    
    public function article_sub_form_page(Request $request){
        //  ReceivedArticles::create();
        return view('pages.article-sub-form');
    }
    
    public function submitmsg_page(){
        return view('pages.submitmsg');
    }

    public function search_gate(Request $request){
        $text=$request->search;
        return redirect()->route('search_name', [$text]);
    }

    public function search_title($text){
        $archive = Archive::where('article_title', 'LIKE', '%'. $text . '%')->get();
        return view('pages.archivevolumeview')->with([
            'archives' => $archive
        ]);
    }

    public function welcomeindex_fun(){
        $wlcm_records=Archive::get();
        // DD($wlcm_records);
        return view('pages.welcome')->with([
            'wlcm_lists' => $wlcm_records
        ]);
    }

}

?>