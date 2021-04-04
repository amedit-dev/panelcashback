<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Http\Resources\UserCollection;
use App\Models\Codes;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function index(){

        return view('transaction-index');

    }

    public function show(Request $request){

        $code = Codes::where('code', '=', '1541')->first();

        if($code){

            return view('transaction-index');


        }else{

            return redirect()->route('codes.login');


        }



    }

    public function showdate(Request $request){



        $newdate = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

        return redirect()->route('transaction.show', ['date' => $newdate] );

    }


    public function create(Request $request){


        $code = Codes::where('code', '=', $request->codice)->first();

        if($code){

            if($code->code == '1541'){

                return redirect()->route('transaction.show');

            }

            return view('create-transactions');


        }else{

            return redirect()->route('codes.login');

        }

    }

    public function store(Request  $request){


        $inpute = $request->validate([
            'position' => ['required','max:10'],
            'transactions' => ['required','max:10'],
            'screenshot' => 'mimes:jpeg,png,jpg'

        ]) ;

        if($file= $request->file('file')){

            $inpute['screenshot'] = $file->store('images');

        }


        if($request->nickname){


            $user = User::where('nickname', '=', $request->nickname)->first();


            if($user){


            }else{

                $user = new User();
                $user->nickname = $request->nickname;
                $user->save();

            }

        }else{

            $user = User::findOrFail(1);

        }


            $transaction = new Transaction($inpute);
            $user->transactions()->save($transaction);


        //$request->session()->flash('transaction-id' , '$transaction->id');


        return redirect()->route('user.create', compact('user', 'transaction'));


    }
}
