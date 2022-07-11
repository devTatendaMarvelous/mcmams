<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments=Member::join('payments','payments.account_id','=','members.id')
        ->join('accounts','accounts.member_id','=','members.id')->get();
        // dd($payments);
       return view('superadmin.payments.index')->with('payments',$payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('superadmin.payments.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $payment=$request->validate([
            'amount'=>['required'],
            'referrence'=>'required',
            'purpose'=>'required',

        ]);

        // =========UPDATING THE BALANCE==============
        $balance= Account::find($id);
        $balance->balance=$balance->balance+$request->input('amount');
        $balance->save();
//=================================================================
//================CREATING A PAYMENT===========
       
        $payment['account_id'] = $id;
        Payment::create($payment);
        return redirect('/accounts');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
