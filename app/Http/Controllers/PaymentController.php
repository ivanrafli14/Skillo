<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createSnapToken(Request $request)
    {
        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $request->amount,
            ],
            'customer_details' => [
                'user_id' => $request->user_id,
                'first_name' => $request->name,
                'email' => $request->email,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $request->amount,
                    'quantity' => 1,
                    'name' => 'Paket Premium '. ($request->monthly ? 'Bulanan' : 'Tahunan'),
                ],
            ],
        ];

        $snapToken = Snap::getSnapToken($params);
        return response()->json($snapToken);
    }

    public function pricing(){
        return view('pricing');
    }

    public function payment(){
        if (Auth::check() && Auth::user()->subscription == 'premium') {
            return redirect('dashboard')->with('success', 'Success Enrolled Course');
        }
        return view('payment');
    }

    public function store($id){
        $user = User::find($id);
        $user->update([
            'subscription' => 'premium',
        ]);
        return redirect('/dashboard')->with('success', 'Payment successful.');
    }

    public function enroll($id){
        CourseUser::create([
            'user_id' => Auth::user()->id,
            'course_id' => $id,
            'progress' => 0,
        ]);

        return redirect()->route('dashboard')->with('success', 'Success Enrolled Course');
    }
    public function successHandler(){

            $user = User::find(Auth::user()->id);
            $user->update([
                'subscription' => 'premium',
            ]);
            return redirect('/dashboard')->with('success', 'Payment successful.');

    }
}
