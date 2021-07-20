<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelpReturn;

class ReturnController extends Controller
{
    public function return($id){
        $data = HelpReturn::with('help_return_values')->where('id',$id)->first();
        return view("help_and_returns.returns",compact('data'));
    }

    public function return1($id){
        $data = HelpReturn::with('help_return_values')->where('id',$id)->first();
        return view("help_and_returns.returnsnew",compact('data'));
    }

    // public function help(){
    //     $data = HelpReturn::with('help_return_values')->where('name_en','LIKE','%Help%')
    //     ->first();
    //     return view("help_and_returns.help",compact('data'));
    // }
}
