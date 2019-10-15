<?php

namespace App\Http\Controllers\Admin;

use App\book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use function Sodium\compare;
use App\Http\Controllers\Auth;

class BookController extends Controller
{

  /*  public function __construct()
    {
        $this->middleware('isadmin');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = book::all();
        return view('admin.book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::where('parent_id','0')->pluck('name','id');
        return view('admin.book.create',compact('cat'));
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
                'auther' => 'required',
                'pname' => 'required',
                'pyear' => 'required',
                'category_id' => 'required',
                'lshn' => 'required',
                'abstract' => 'required',
                //'image' => 'required|mimes:jpg,jpeg,png,gif',
                // 'pdf' => 'required|mimes:txt,pdf,doc',
            ]);
        $file = $request->file('image');
        if ($request->hasFile('image'))
        {
            $imageUrl = $this->uploadImage($file);
        }
        $file1 = $request->file('pdf');
        if ($request->hasFile('pdf'))
        {
            $sourceUrl = $this->uploadSource($file1);
        }

       book::create(array_merge($request->all(),['image' => $imageUrl],['pdf' => $sourceUrl]));
       // $book->categories()->sync(request('category_id')); $book =
        return redirect('admin/book/create');
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
         $book = book::find($id);
         $cat = Category::where('parent_id','0')->pluck('name','id');
            return view('admin.book.edite',compact('book','cat'));
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
       $book = book::findorfail($id);
        $file = $request->file('image');
        if ($request->hasFile('image'))
        {
            $imageUrl = $this->uploadImage($file);
        }
        else
        {
            $imageUrl = $request->image;
        }
        $file1 = $request->file('pdf');
        if ($request->hasFile('pdf'))
        {
            $sourceUrl = $this->uploadSource($file1);
        }
        else
        {
            $sourceUrl = $request->pdf;
        }
       $book->update(array_merge($request->all(),['image' => $imageUrl],['pdf' => $sourceUrl]));
       return redirect('admin/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book::find($id)->delete();
        return redirect('admin/book');
    }



  private function uploadImage($file)
    {
        $imagePath="\upload\images";
        $filename = time().'.'.$file->getClientOriginalName();
        $file=$file->move(public_path($imagePath),$filename);
        return $filename;
    }

    private function uploadSource($file1)
    {
        $sourcePath="\upload\sources";
        $filename1= time().'.'.$file1->getClientOriginalName();
        $file1=$file1->move(public_path($sourcePath),$filename1);
        return $filename1;
    }

}
