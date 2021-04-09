<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('roles')->get();
        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(UpdateUserRequest $request)
    {
        dd($request->all());
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



    //---------- definition of action user ------------------//
    public function profile()
    {
        return view('profile.index');
    }

    public function updateProfile(UpdateUserRequest $request){
        //$user->update($request->validated());
        $user = auth()->user();
        User::where('id',$user->id)
        ->update($request->except(['_token','_method']));
        return redirect()->back()->with('success','Profile has been update successfully');
    }
    
    public function getPassword()
    {
        return view('profile.password');
    }

    public function changePassword(UpdatePasswordRequest $request)
    {
        $user =auth()->user();
        $password = $request->input('password');
        $check = password_verify($password,$user->password);

        $passwordConf = bcrypt($request->input('password_confirmation'));

        $checkSamePassword = password_verify($password,$passwordConf);

        if($checkSamePassword === true){
            
             if($check === true){
                 return redirect()->back()->with('error','Please change this password');
             }else{
                 User::where('id',$user->id)
                 ->update([
                     'password' => $passwordConf
                 ]);
                 return redirect()->back()->with('success','Password has been changed successfully');
             }
            
        }else{
            return redirect()->back()->with('error','Password has been not the Same');
        }
    }

}
