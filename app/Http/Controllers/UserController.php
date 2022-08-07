<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\CreatedUser;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.users.index', [
            'users' => User::orderBy('id','desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $password=Str::random(10);
        $request['password']=bcrypt($password);

        $user=User::create($request->all());

        \Mail::to($user->email)->send(new CreatedUser($user,$password));

        return redirect()->route('users.index')->with('success', __('users.create.stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);

        return view('layouts.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user=User::findOrFail($id);

        if(User::where([['id','!=',$id],['email',$request->email]])->count()){
            return redirect()->back()->with('error-email', __('users.edit.validations.email_unique'));
        }

        if($request->password){
            $password=$request->password;
            $request['password']=bcrypt($password);
            \Mail::to($user->email)->send(new CreatedUser($user,$password));
        }else{
            unset($request['password']);
        }

        $user->updated_at=date('Y:m:d h:i:s');
        $user->update($request->all());


        return redirect()->back()->with('success', __('users.edit.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);

        $user->delete();

        return redirect()->back()->with('success', __('users.delete.deleted'));
    }
}
