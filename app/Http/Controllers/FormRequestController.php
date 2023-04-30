<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use App\Models\ReceivedArticles;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FormRequestController extends Controller
{
    public function article_sub_form_req(Request $request){
        // dd($request);
        $ms_file = $request->file('ms_file1');
        $ms_file=$ms_file->store('submited_articale');
        $ms_file=basename($ms_file);

        $potential_reviewer = $request->file('potential_reviewer1');
        $potential_reviewer=$potential_reviewer->store('submited_articale');
        $potential_reviewer=basename($potential_reviewer);

        $performa = $request->file('performa1');
       $performa= $performa->store('submited_articale');
       $performa=basename($performa);
       if ($ms_file && $potential_reviewer && $performa) {
        $user_id=Session::get('author_user_id_sess');
        $request['user_login_id']=@$user_id;
        $request['ms_file']=$ms_file;
        $request['potential_reviewer']=$potential_reviewer;
        $request['performa']=$performa;
        // dd($request->all());
        ReceivedArticles::create($request->all());
        Session::flash('author_user_id_sess');
        return redirect()->route('submitmsg_name');
       }
    }

    public function userregistration_req(Request $request){
        UserLogin::create($request->all());
        return redirect()->route('userregistration_page')->with('status', 'Profile updated!');
    }

    public function online_submission_loginreq(Request $request){
        $login=UserLogin::where('email',$request->email)->where('password',$request->password)->first();
        if (@$login) {
            Session::put('author_user_id_sess', $login->id);
            return redirect()->route('article_sub_form_page');
        }else{
            return redirect()->back()->withErrors(['message' => 'invalid login detail']);
        }
    }

}
