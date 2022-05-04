<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Account;
class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)

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
    public function store(Request $request,$id)
    {

        $account=Account::all()->where('member_id',$id);

        if(count($account)>0){

            echo "<script>alert('The member already has an account!!');</script>";
            return redirect()->back();

        }else{



             $memberAccount=new Account();

            $contribution = $request->input('principal');
            $memberAccount->member_id=$id;
            $memberAccount->principal=$contribution;
            $memberAccount->globallimit=$contribution*48;
            $memberAccount->suffix=1;
            $memberAccount->billinggroup=$request->input('billinggroup');
            $memberAccount->memberno='mc-'.count($account);
            $memberAccount->save();

            echo "<script>alert('Account Created Successfully');</script>";
            return redirect()->back();
            
    
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
