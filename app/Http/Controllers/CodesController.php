<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CodesController extends Controller
{


    public  function login(){


        return view('codes-index');

    }

    public  function index(){

        $codes = Codes::all();

        return view('admin.codes-index', compact('codes'));

    }


    public function create(){

        return view('admin.codes-create');

    }

    public function store(Request $request){



        $inpute = \request()->validate([
            'code' => ['required', 'max:255', 'unique:codes'],
        ]);


        $codes = new Codes($inpute);
        $codes->save();

        $request->session()->flash('code-created-message' , 'Codice Creato');


        return redirect()->route('codes.index');
    }


    public function destroy(Codes $codes, Request $request){




        $codes->delete();

        return back();
    }


    public function check(Request $request){


        $inpute = \request()->validate([

            'code' => ['required'],
        ]);


        $code = Codes::where('code', '=', $request->code)->first();


        if($code){

                $codice = $code->code;

                return redirect()->route('transaction.create', compact('codice'));

        }

        $request->session()->flash('codes-index-message' , "il codice  ".$code."  è Scaduto");

        return back();
    }
}
