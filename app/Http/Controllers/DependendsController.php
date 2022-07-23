<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Dependend;
use App\Models\DependendAccount;

class DependendsController extends Controller
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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id  )
    {
         return view('superadmin.dependends.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $memberno = Account::all()->where('member_id',$id);
        $member=Member::find($id);
        $memberno=json_decode($memberno,true);

        $dependend=$request->validate([
            'name'=>'required',
            'surname'=>'required',
            'initials'=>'nullable',
            'dob'=>'required',
            'natId'=>['required','unique:dependends'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:dependends'],
            'phone'=>['required', 'min:10', 'max:10'],
            'sex'=>'required',
            'ailments'=>'nullable',
            'address'=>'required',
    
            
        ]);

        $dependend['photo']='nomedia.png';
        $dependend['member_id']=$id;

        Dependend::create($dependend);

        return redirect("/dependends/".$id."/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dependends=Dependend::all()->where('member_id',$id);
        $member=Member::findorfail($id);
        $accounts=DependendAccount::all();
       
       return view('superadmin.dependends.index')
            ->with('member',$member)
            ->with('dependends', $dependends)
            ->with('accounts',$accounts);
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
