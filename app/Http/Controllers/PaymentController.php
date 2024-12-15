<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pricing(){
        return view('pricing');
    }

    public function payment(){
        return view('payment');
    }

    public function store($id){
        $user = User::find($id);
        $user->update([
            'subscription' => 'premium',
        ]);
        return redirect('/dashboard')->with('success', 'Payment successful.');
    }
}
