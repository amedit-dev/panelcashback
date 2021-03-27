<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Http\Resources\UserCollection;
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


        return view('transaction-index');


    }

    public function showdate(Request $request){



        $newdate = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');

        return redirect()->route('transaction.show',compact('newdate'));


    }


    public function create(){

        return view('create-transactions');
    }

    public function store(Request  $request){


        $inpute = $request->validate([
            'position' => ['required','max:10'],
            'transactions' => ['required','max:10'],
        ]) ;

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
