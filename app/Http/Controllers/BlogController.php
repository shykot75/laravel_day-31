<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Student;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    protected $blog;

    public function index()
    {
        return view('add-blog');
    }

    public function create(Request $request)
    {
//        return $request->all();
        $this->blog = new Blog();
        $this->blog->title       = $request->title;
        $this->blog->author      = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

//        return "success"; one time session 'message' which will destroy afterwards
        return redirect()->back()->with('message', 'Blog information saved successfully!');
    }
    public function manage()
    {
//        return Student::orderBy('id', 'desc')->take(2)->get(); //last two
//        return Student::orderBy('id', 'desc')->skip(1)->take(5)->get(); //skip one by one
        $this->students = Student::orderBy('id', 'desc')->get();
        return view('manage-student', ['students'=>$this->students]);
    }
    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('edit-student',['student' => $this->student]);
    }
}
