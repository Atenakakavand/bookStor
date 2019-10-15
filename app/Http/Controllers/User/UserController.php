<?php

namespace App\Http\Controllers\User;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function profile()
     {

     }*/

    public function index()
    {
        $profile = Profile::all();
        return view('user.profile.indexPro',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.profile.createPro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),
            [
                'username'=>'required',
                'fname'=>'required|min:3',
                'lname'=>'required|min:3',
                'mobile'=>'required',
                'email'=>'required',
                'address'=>'required',
            ]);
         $file = $request->file('image');
         if ($request->hasFile('image'))
         {
             $imageUrl = $this->uploadImage($file);
         }
        Profile::create(array_merge($request->all(),['image'=>$imageUrl]));//
        return redirect()->back();
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
        $profile = Profile::find($id);
        return view('user.profile.editPro',compact('profile'));
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
        $profile = Profile::findorfail($id);
        $file = $request->file('image');
        if ($request->hasFile('image'))
        {
            $imageUrl = $this->uploadImage($file);
        }
        $profile->update(array_merge($request->all(),['image'=>$imageUrl]));
        return redirect('user/profile');
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

    private function uploadImage($file)
    {
        $imagePath="\upload\Userimages";
        $filename = time().'.'.$file->getClientOriginalName();
        $file=$file->move(public_path($imagePath),$filename);
        return $filename;
    }
}
