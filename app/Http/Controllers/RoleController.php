<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreroleRequest;
use App\Http\Requests\UpdateroleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }
    public function index_cr_login()
    {
        return view('login.createaccount');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login_account(Request $request )
    { 
        // if(Auth::attempt(['email' => $request->email , 'password' => $request->password])){
        //     $user = Auth::user();
        //     if($user->role == 'admin')
        //         return redirect('admin');
        //     else return redirect('/');
        // }
        // return back();

        // return back();
       // return redirect('/coffe');
        if($request->isMethod('post')){
            
                $validator =  Validator::make($request->all() ,[       
                        'email' => "required | email" ,
                        'password' => 'required |min:3 | max:30',
                    ]);
                
                if(Auth::attempt(['email' => $request->email , 'password' => $request->password] , true)){
                    if(Auth::user()->role == 'admin')
                        return redirect('/admin');
                }else 
                    return redirect('/');

            if ($validator->fails()) {
                    return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
            }  
        }
        
    }
    public function create_account(Request $request)
    { 
        
        if($request->isMethod('post')){
            
            $validator =  Validator::make($request->all() , [
                'Ten' => 'required | min:6 | max:50 ',
                'email' => "required | email" ,
                'password' => 'required |min:3 | max:30',
                'NamSinh' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            if($request->has('role')){
                $role = $request->input('role');
                User::insert([
                    'Ten' => $request->Ten,
                    'email' => $request->email ,
                    'password' =>bcrypt( $request->password) ,
                    'GioiTinh' => $request->GioiTinh ,
                    'NamSinh' => $request->NamSinh ,
                    'role' => $role,
                ]);
                
                return redirect('/admin');
            }
            else { 
                User::insert([
                    'Ten' => $request->Ten,
                    'email' => $request->email ,
                    'password' =>bcrypt( $request->password) ,
                    'GioiTinh' => $request->GioiTinh ,
                    'NamSinh' => $request->NamSinh ,
                ]);
                
                return redirect('/');
            }
        }
        
    }

    public function lish_role(Request $rq)
    {
        
        if($rq->has('role')){
            $role = $rq->input('role');
            $data_list = User::all()->where('role' , '=' , $role);
            return view('admin.list_role' , ['data' => $data_list]);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreroleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreroleRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateroleRequest  $request
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateroleRequest $request,)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
