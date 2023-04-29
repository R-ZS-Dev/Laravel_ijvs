<?php

namespace App\Http\Controllers;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use App\Models\ReceivedArticles;
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
        $request['user_login_id']=0;
        $request['ms_file']=$ms_file;
        $request['potential_reviewer']=$potential_reviewer;
        $request['performa']=$performa;
        // dd($request->all());
        ReceivedArticles::create($request->all());
        return redirect()->route('submitmsg_name');
       }
    }

    public function userregistration_req(Request $request){
        UserLogin::create($request->all());
        return redirect()->route('userregistration_page')->with('status', 'Profile updated!');
    }

}
