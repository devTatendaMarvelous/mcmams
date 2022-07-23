<?php

namespace App\Http\Controllers;
use App\Models\Claim;
use App\Models\Account;



use Illuminate\Http\Request;

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $claims=Claim::join('accounts','accounts.member_id','=','members.id')
        // ->join('claims','claims.account_id','=','accounts.id');
        $claims=Claim::all();
        return view('superadmin.claims.index')->with('claims',$claims);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $limit)
    {
           $account=Account::find($id);
        // $productId=Member::find($account->member_id);
        // dd($account->claimed);
      
        if($account->claimed>$limit){
            return 'over Claimed <a href="/accounts">Back</a>';

        }else{
            
        return view('superadmin.claims.create')->with('id',$id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id,$limit)
    {
     
        $claim=$request->validate(
            [
                'provider'=>'required',
                'amount'=>'required',
                'referrence'=>['required','unique:claims'],
                'description'=>'required',
            ]
           
        );
         $claim['status']='PENDING';
            $claim['account_id']=$id;
            Claim::create($claim);
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
