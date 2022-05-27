<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    public function add(Request $req)
    {
        $validate=$req->validate([
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required',
        ]);
        $q=new question();
        $q->question=$req->question;
        $q->a=$req->opa;
        $q->b=$req->opb;
        $q->c=$req->opc;
        $q->d=$req->opd;
        $q->ans=$req->ans;

        $q->save();
        Session::put('success',"Question successfully Added");
        return redirect()->back();

    }

    public function display()
    {
        $que=question::all();
        Session::put('id');
        return view('questions',compact('que'));

    }

    public function delete(Request $req)
    {

    }
    public function start()
    {
        Session::put('nextq','1');
        Session::put('wrongans','0');
        Session::put('correctans','0');
        $q=question::all()->first();

        return view('answer')->with(['question'=>$q]);
    }
    public function save(Request $req)
    {
        $nextq=Session::get('nextq');
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        $i=Session::get('id');
        $validate=$req->validate([
            'ans'=>'required',
            'dbans'=>'required',

        ]);
        $nextq+=1;
        if($req->dbans==$req->ans)
        {
            $correctans+=1;
        }
        else
        {
            $wrongans+=1;
        }
        Session::put('nextq',$nextq);
        Session::put('wrongans', $wrongans);
        Session::put('correctans',$correctans);

        $i=0;
        $question=question::all();

        foreach($question as $question)
        {
            $i++;
            if($question->count()< $nextq)
            {
                return view('last');
            }

            if($i==$nextq)
            {
                return view('answer')->with(['question'=>$question]);

            }
        }
    }
}
