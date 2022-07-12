<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Account;
use App\Models\Product;

class AccountsController extends Controller
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
        
     $accounts=Product::join('members','members.product_id','=','products.id')
                    ->join('accounts','accounts.member_id','=','members.id')->get();
  
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
        $member=Member::findorfail($id);
        return view('superadmin.accounts.create')
        ->with('member',$member)->with('id',$id);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
  
        $account=Account::all()->where('member_id',$id);
        $allAccounts=Account::all();

        if(count($account)>0){

            echo "<script>alert('The member already has an account!!');</script>";
            // return redirect()->back();

        }else{


            $member=Member::find($id);        
            $memberAccount['member_id']=$id;
            $memberAccount['suffix']=1;
            $memberAccount['balance']= 0.00;
            $memberAccount['claimed']= 0.00;
            $memberAccount['status']='WAITING';

            if($member->product_id==1){
                if(count($allAccounts)>0){
                    $memberAccount['memberno']='BC-'. 1 + count($allAccounts);
                }else{
                    $memberAccount['memberno']='BC-0001';
                     
                }
                
            }elseif($member->product_id==2){
                if(count($allAccounts)>0){
                    $memberAccount['memberno']='MC-'. 1 + count($allAccounts);
                }else{
                    $memberAccount['memberno']='MC-0001';
                }
                
            }elseif($member->product_id==3){
                if(count($allAccounts)>0){
                    $memberAccount['memberno']='PT-'. 1 + count($allAccounts);
                }else{
                    $memberAccount['memberno']='PT-0001';
                }            
            }
           Account::create($memberAccount);
            echo "<script>alert('Account Created Successfully');</script>";
            return redirect('/accounts');
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
        $memberAccount =  Account::find($id);
        
        $memberAccount->status =  $request->input('status');
        $memberAccount->save();

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
