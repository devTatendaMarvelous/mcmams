<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Dependend;

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
    public function index($id)
    {
        return view('superadmin.dependends.dependends')->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $memberno=$memberno[0]['memberno'];
        $dependend = new Dependend();
        $dependend->memberno =$memberno;
        $dependend->name = $request->input('name');
        $dependend->surname = $request->input('surname');
        $dependend->initials = $request->input('initials');
        $dependend->dob = $request->input('dob');
        $dependend->natId = $request->input('natId');
        $dependend->company = $member->company;
        $dependend->email = $request->input('email');
        $dependend->phone = $request->input('phone');
        $dependend->sex = $request->input('sex');
        $dependend->address = $request->input('address');
        $dependend->member_id=$id;
        $dependend->save();
        return redirect('/members');
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
        
       return view('superadmin.dependends.view')
            ->with('member',$member)
            ->with('dependends', $dependends);
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
