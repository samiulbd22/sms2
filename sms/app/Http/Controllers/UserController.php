<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;
    private $users;
    public function index()
    {
        return view('admin.user.add');
    }


    public function manage()
    {
        $this->users = User::all(); // for data bring
        //return $this->users; // to show
        return view('admin.user.manage',['users'=>$this->users]);
    }


    public function create( Request $request)
    {
        //return $request->all(); form a ki ace dekhar jonno
        /* transfer model this code
//        $this->user = new user();
//        $this->user->name = $request->name;
//        $this->user->email = $request->email;
//        $this->user->password = bcrypt($request->password); //md5
//        $this->user->save();
        */

//        $this->user = new User();
//        $this->user->newUser($request);

        User::newUser($request);
        return redirect('/add-user')->with('message','User added successfully');
    }

    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit',['auser'=>$this->user]);
    }

    public  function update(Request $request, $id)
    {
        User::updateUser($request,$id);
        return redirect('/manage-user')->with('message','update success');
    }
    public function delete()
    {

    }
}
