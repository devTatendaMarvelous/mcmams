<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Dependend;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class MembersController extends Controller
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
        $members= Member::all();
        $accounts=Account::all();
        return view('superadmin.members.members')
        ->with('accounts',$accounts)
        ->with('members',$members);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.members.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member=$request->validate([
            'name'=>'required',
            'surname'=>'required',
            'initials'=>'nullable',
            'dob'=>'required',
            'natId'=>'required',
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:members'],
            'phone'=>['required', 'min:10', 'max:10'],
            'sex'=>'required',
            'ailments'=>'nullable',
            'address'=>'required',
        ]);

        Member::create($member);

        return redirect('/members');
    }
    
    function addDependeds($id){
        return view('superadmin.dependends.dependends')->with('memberId',$id);
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
