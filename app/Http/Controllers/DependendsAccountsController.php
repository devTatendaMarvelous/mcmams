<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dependend;
use App\Models\Account;
use App\Models\DependendAccount;
use App\Models\Product;
use App\Models\Member;

class DependendsAccountsController extends Controller
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
        
     $accounts=Product::join('dependends','dependends.product_id','=','products.id')
                    ->join('accounts','accounts.dependend_id','=','dependends.id')->get();
  
     return view('superadmin.accounts.index')
     ->with('accounts',$accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function open($id)

    {
        $dependend=dependend::findorfail($id);
        return view('superadmin.accounts.create')
        ->with('dependend',$dependend)->with('id',$id);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $member_id)
    {
  
        $account=DependendAccount::all()->where('dependend_id',$id);
    

        if(count($account)>0){

          
            return back()->with('alert','The dependend already has an account!! ');

        }else{


            $memberAccount=Account::all()->where('member_id', $member_id);
          
            $accounts=DependendAccount::all()->where('memberno',$memberAccount[0]['memberno']);
                
            $dependendAccount['dependend_id']=$id;
            $dependendAccount['suffix']=count($accounts)+2;
            $dependendAccount['balance']= 0.00;
            $dependendAccount['claimed']= 0.00;
            $dependendAccount['status']='WAITING';
            $dependendAccount['memberno']=$memberAccount[0]['memberno'];
           
           DependendAccount::create($dependendAccount);
            echo "<script>alert('Account Created Successfully');</script>";
            return redirect('/dependends/'.$member_id.'/show')->with('alert','Account opened successfuly ');
        }
   
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
        $account=Account::find($id);
        return view('superadmin.accounts.edit')->with('account',$account);
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
        $dependendAccount =  Account::find($id);
        
        $dependendAccount->status =  $request->input('status');
        $dependendAccount->save();

        echo "<script>alert('Account Updated Successfully');</script>";
        return redirect('/accounts/p');
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
