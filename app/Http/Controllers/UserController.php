<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function create(User $user, Transaction $transaction, Request $request){

        return view('create-user', compact('user','transaction' ));

    }

    public function store(User $user, Transaction $transaction,  Request $request){



        $inpute = \request()->validate([
            'nickname' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
        ]);


            $user = new User($inpute);
            $user->save();

        $request->session()->flash('user-created-message' , 'Grazie, Da ora in poi utilizza');
        $request->session()->flash('Data' , $user->nickname);


        $user->transactions()->save($transaction);


        return back();


    }
}
