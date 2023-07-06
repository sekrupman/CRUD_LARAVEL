<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function index(){
        $data = user::all();
        
        return view('dashboard',compact('data'));
    }
    public function create(){
    return view ('create');
    }
    public function insert(Request $request)
    {
        $userData = $request->except('submit');
        $email = $userData['email'];

        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            return redirect('/create')->with('error', 'Email already exists');
        }      
        User::create($userData);    
        return redirect()->route('user');
    }

public function showuser($id)
{
    $data = User::find($id);

    return view('update', compact('data'));
}

public function update(Request $request, $id)
{
    $data = User::find($id);

    $existingUser = User::where('email', $request->email)->where('id', '!=', $id)->first();
    if ($existingUser) {
        return redirect('/update/' . $id)->with('error', 'Email already exists');
    }

    $data->update($request->except('submit'));

    return redirect()->route('user')->with('success', 'Data berhasil diupdate');
}

public function delete($id){
    $data = User::find($id);
    $data->delete();
    return redirect()->route('user')->with('success', 'Data berhasil didelete');
}



};
