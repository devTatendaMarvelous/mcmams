<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Helpers\Qs;
use App\Repositories\UserRepo;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;



class UserController extends Controller
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        try {
            $user=new User();
            $user->name=$request->input('name');
            $user->email=$request->email;
            $user->password=Hash::make($request->input('password'));
            $user->role='Member';
            $user->photo='nomedia.png';
            $user->save();
            return redirect('/users');
        }
        catch (\Exception $e) {

           return view('error');
        }

    }


    public function edit($id){
        $user=User::find($id);
        return view('superadmin.users.editUser')->with('user',$user);

    }

    public function getUsers()
    {

        try{
       $users=User::all();

       return view('superadmin.users.viewUsers')->with('users',$users);
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function updateUser(Request $request,$id)
    {

        try {
        
        
        $user =  User::find($id);
   
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->role=$request->input('role');
            $user->photo='nomedia.png';
            $user->save();
      return redirect('/users');
    }
    catch (\Exception $exception){
         return $exception->getMessage();
    }
    
    }
    public function deleteUser($id)
    {
       try {
              $user = User::findOrFail($id);
              $user ->delete();
                echo "<script>alert('User Deleted Successfully!!');</script>";
              return redirect()->back();
         }catch (\Exception $exception){
          return redirect()->back()->with('error', 'An error occured while processing your request',$exception);
         }
    }
}
