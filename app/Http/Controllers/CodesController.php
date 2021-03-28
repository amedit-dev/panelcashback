<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function create(){

        return view('codes-index');

    }

    public function check(Request $request){


        $inpute = \request()->validate([

            'code' => ['required', 'integer'],
        ]);


        $code = Codes::where('code', '=', $request->code)->first();


        if($code){

                $codice = $code->code;

                return redirect()->route('transaction.create', compact('codice'));

        }

        $request->session()->flash('codes-index-message' , "il codice  ".$code."  è sbagliato");

        return back();
    }
}
