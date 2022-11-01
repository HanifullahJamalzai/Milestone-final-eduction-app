<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
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
    
    public function comment_destroy($id){
        Comment::find($id)->delete();
        return redirect('/admin');
    }
}
