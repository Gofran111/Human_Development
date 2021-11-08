<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;


use DB;
use App\Books;
use App\Comments;
use App\CommentsVideo;
use App\Vedio;

class CommentsController extends Controller
{
     //store
     public function store(Books $book){
       
        // $book->validate([
        //     'body' => 'required|max:500',
             
        // ]);
        $comment = new Comments();
        $comment->body = request('body') ;
        $comment->user_id = auth()->user()->id;
        //.................................
        
        $comment->books_id = $book->id;
        
        $comment->save();

        return back();
    }



     //store videos comments
     public function storeVC(Vedio $video){

        $comment = new CommentsVideo();
        $comment->body = request('body') ;
        $comment->user_id = auth()->user()->id;
        //.................................
        
        $comment->vedio_id = $video->id;
        
        $comment->save();

        return back();

    }

    //destroy
    public function destroy(Request $request){
      $comment = Comments::find($request->id);
      $comment->delete();
      return back();
      
    }

      //destroy
      public function deleteV(Request $request){
         $comment = CommentsVideo::find($request->id);
         $comment->delete();
         return back() ;
      }
  
}
