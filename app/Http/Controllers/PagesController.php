<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    /*POST
     */
    public function tactic($id)
    {
        $tacticDetails = Tactic::where('id', $id)->first();

        return view('pages.tactic',['tacticDetails'=>$tacticDetails]);
    }

    public function tactics(){

        $tactics = Tactic::get();

        return view('pages.tactics',['tactics'=>$tactics]);

    }

    public function training(){
        return view('pages.training');
    }
    public function skills(){
        return view('pages.skills');
    }
    
    public function showboat(){
        return view('pages.showboat');
    }
    
    public function gallery(){
        return view('pages.gallery');
    }
    
    public function documentary(){
        return view('pages.docs');
    }
    
    public function contact(){
        return view('pages.contact');
    }


     public function prediction(){
        return view('pages.prediction');
    }
    public function bet(){
        return view('pages.bet');
    }
    public function stream(){
        return view('pages.stream');
    }
    public function odd(){
        return view('pages.odd');
    }
    public function dash(){
        return view('pages.home');
    }
    
}
