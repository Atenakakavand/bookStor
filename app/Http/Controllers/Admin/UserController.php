<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
                'name' => 'required|max:250',
                'email' => 'required',
                'role' => 'required',
                //'image' => 'required|mimes:jpg,jpeg,png,gif',
        ]);
        $file = $request->file('image');
        if ($request->hasFile('image'))
        {
            $imageUrl = $this->uploadImage($file);
        }


        User::create(array_merge($request->all(),['image' => $imageUrl]));
        return redirect('admin/user/create');
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
        $users = User::find($id);
        return view('admin.user.edit',compact('users'));
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
        $users = User::findorfail($id);
        $file = $request->file('image');
        if ($request->hasFile('image'))
        {
            $imageUrl = $this->uploadImage($file);
        }
        else
        {
            $imageUrl = $request->image;
        }
        $users->update(array_merge($request->all(),['image' => $imageUrl]));
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('admin/user');
    }

    private function uploadImage($file)
    {
        $imagePath="\upload\Userimages";
        $filename = time().'.'.$file->getClientOriginalName();
        $file=$file->move(public_path($imagePath),$filename);
        return $filename;
    }
}
