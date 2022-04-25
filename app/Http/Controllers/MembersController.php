<?php

namespace App\Http\Controllers;

use App\Models\Dependend;
use App\Models\Member;
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
        return view('superadmin.members.members')->with('members',$members);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member=new Member();
        $member->name=$request->input('name');
        $member->surname = $request->input('surname');
        $member->initials = $request->input('initials');
        $member->dob = $request->input('dob');
        $member->natId = $request->input('natId');
        $member->company = $request->input('company');
        $member->email = $request->input('email');
        $member->phone = $request->input('phone');
        $member->sex = $request->input('sex');
        $member->address = $request->input('address');
        $member->memberno="NA";
        $member->save();

        return redirect('/members');
    }
    public function storeDependends(Request $request,$id)
    {
        $member =Member::findorfail($id);
        $dependend=new Dependend();
        $dependend->name = $request->input('name');
        $dependend->surname = $request->input('surname');
        $dependend->initials = $request->input('initials');
        $dependend->dob = $request->input('dob');
        $dependend->natId = $request->input('natId');
        $dependend->company = $request->input('company');
        $dependend->email = $request->input('email');
        $dependend->phone = $request->input('phone');
        $dependend->sex = $request->input('sex');
        $dependend->address = $request->input('address');
        $member->dependeds->save($dependend);

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
