<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Course;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request, $courseId)
    {
        $request->validate([
            'comment_description' => 'required',
        ]);
        
        Comment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $courseId,
            'comment_description' => $request->comment_description,
        ]);

        return redirect('/admin');
        
    }
    
    public function commentDestroy($id){
        Comment::find($id)->delete();
        return redirect('/admin');
    }
    
    public function commentEdit($comment){
        
        $isComment = Comment::find($comment);
        $courses = Course::all();
        // $courses = Course::with('comments')->get();
        return view('admin.index', compact('courses', 'isComment'));
    }


    public function updateComment(Comment $comment, Request $request)
    {
        $request->validate([
            'comment_description' => 'required',
        ]);
        
        $comment->update([
            'comment_description' => $request->comment_description
        ]);

        return redirect('/admin');
    }
}
