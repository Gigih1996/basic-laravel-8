<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::orderBy('id', 'ASC')->get();
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
      
        $roles = Role::all();
        $status = Status::all();

        return view('users.create', compact('roles','status'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $role = Role::all();
        $status = Status::all();

        return view('users.edit', compact('user', 'role', 'status'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status_id' => 'required',
            'role_id' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password' 

        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $post = User::create($input);
        
        if($post){
            return redirect()
            ->route('users.index')
            ->with('success', 'New user has been create successfully.');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'status_id' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'password' => 'same:confirm-password'          
        ]);


        $input = $request->all();
        // return dd($input);
        if(empty($input['password'])) $input = Arr::except($input, ['password']);
        else $input['password'] = Hash::make($input['password']);

        $user = User::find($id);
        $user->update($input);

        if($user)
        {
            return redirect()->route('users.index')->with('success', 'Update user has been edit successfully.');
        }
    }

    public function destroy($id)
    {
        $input = User::find($id)->delete();
        if($input)
        {
            return redirect()->route('users.index')->with('destroy', 'User has been delete successfully.');
        }
    }
}
