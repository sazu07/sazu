<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Session;
use Hash;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$all = User::all();
        return view('admin.user.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $allRole=Role::all();
        return view('admin.user.create',compact('allRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string|max:191',
            'phone'=>'required|numeric',
            'email'=>'required|string|email|max:191|unique:users',
            'password'=>'required||string|min:8|confirmed',
            'role_id'=>'required',
            'image'=>'nullable|file|mimes:jpeg,jpg,png,gif,svg|max:500'
        ],
        [
         'name.required'=>'Please enter your name! ',
         'phone.required'=>'Please enter your phone number!',
         'email.required'=>'please enter your email!',
         'password.required'=>'Please enter your password!',
         'role_id.required'=>'Please select your Role!',
         'image.required'=>'Max Image size 500kb'


        ]);

        if($request->hasFile('image')){
            $photo=$request->file('image');
            $imageName=($request->name).'_'.time().'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->save(base_path('public/uploads/users/'.$imageName));
        } else {
            $imageName = 'avatar.jpg';
        }

        $request->request->add(['photo' => $imageName]);
        $lastUser = User::latest()->first();               
        $request->merge(['password' => Hash::make($request->password)]);
        // $request->merge(['status' => 1]);
        $insert=User::create($request->all());

       

        if($insert){
            Session::flash('success','value');
            return redirect('user');
        }else{
            Session::flash('error','value');
            return redirect('master');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $allRole=Role::all();
        return view('admin.user.edit',compact('user','allRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $this->validate($request,[
            'name'=>'required|string|max:191',
            'phone'=>'required|numeric',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password'=>'sometimes||string|min:8|confirmed',
            'role_id'=>'required',
            'image'=>'nullable|file|mimes:jpeg,jpg,png,gif,svg|max:500'
        ],
        [
         'name.required'=>'Please enter your name! ',
         'phone.required'=>'Please enter your phone number!',
         'email.required'=>'please enter your email!',
         'password.required'=>'Please enter your password!',
         'role_id.required'=>'Please select your Role!',
         'image.required'=>'Max Image size 500kb'


        ]);

        if($request->hasFile('image')){
            $photo = $request->file('image');
            $imageName= str_slug($request->name).'_'.time().str_random(10).'.'.$photo->getClientOriginalExtension();
            Image::make($photo)->fit(555, 600)->save(base_path('public/uploads/users/'.$imageName));
            $oldPhoto=public_path()."/uploads/users/".$user->photo;
            if(file_exists($oldPhoto)){
                unlink($oldPhoto);
            }
        } else {
            $imageName = $user->photo;
        }
        
        // $request->merge(['status' => (boolean)$request->status]);
        $request->request->add(['photo' => $imageName]);

        $update = $user->update($request->all());
        if($update){
            Session::flash('success','value');
            return redirect('user');
        }else{
            Session::flash('error','value');
            return redirect()->back();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy(User $user)
   {
       $delete =  $user->delete();
       if($delete){
           Session::flash('success','value');
           return redirect()->back();
       }else{
           Session::flash('error','value');
           return redirect()->back();
       }
   }
}
