<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Books;
use App\Vedio;

class PagesController extends Controller
{
    public function index(){
        $title = 'This is title';
        //ارسال متغيرات
       // return view('pages.index',compact('title'));
       // return view('pages.index',['title' => $title]);
      // return view('pages.index')->with('title',$title);
      $img = DB::table('sttings')->where('name', 'img')->value('value');
      return view('pages.index',compact('img'));
    }

    
    
    public function about(){
        $data = Books::all();
      // $data = DB::table('Books')->paginate(5);
       $count = Books::count();
        return view('pages.Book', compact('data','count'));
      
    }
    
    public function services(){
        // $data = [ //array
        //     'title' => 'the following services are provided' ,//asoshiative array
        //     'services' => [
        //         'programing', 'atoumation ', 'web desing'
        //     ]
        //     ];
        $videos = Vedio::all();
        $count = Vedio::count();
        return view('pages.Video', compact('videos','count'));
        // return view('pages.Video')->with($data);
    }


   //view
   public function view(Books $data){
    $stop_comments = DB::table('sttings')->where('name', 'stop_comments')->value('value');
    return view('pages.view', compact('data', 'stop_comments'));
}


    //view videos
    public function viewVideo(Vedio $videos){
        $stop_comments = DB::table('sttings')->where('name', 'stop_comments')->value('value');
        return view('pages.viewVideo', compact('videos', 'stop_comments'));
    }


    //search
    public function search(Request $request){
        $request->validate([
            'q'=> 'required'
        ]);
        $data = new Books;
        $q = $request->q;
        $fiteredBook = Books::where('name', 'like', '%' . $q . '%')
                           ->orwhere('description', 'like', '%' . $q . '%')
                           ->get();
    
        // if($fiteredBook->count() ){
        //     return view('pages.Book',compact('data'))->with([
        //         'pages' =>$fiteredBook
        //     ]);
        // }else{
        //     return view('pages.Book')->with(['status'=> 'search failed......please try again']);
        // }
       dd($fiteredBook);
    }



        //searchVideo
        public function searchV(Request $request){
            $request->validate([
                'q'=> 'required'
            ]);
    
            $q = $request->q;
            $fiteredVideo = Vedio::where('name', 'like', '%' . $q . '%')
                               ->orwhere('description', 'like', '%' . $q . '%')
                               ->get();
        
            if($fiteredVideo->count() ){
                return view('pages.Video')->with([
                    'pages' =>$fiteredBook
                ]);
            }else{
                return view('pages.Video')->with(['status'=> 'search failed......please try again']);
            }
    
        }

        //delete Book
        public function delete(Books $book){
            $book->delete();
            return back();
        }

        //delete Video
        public function deleteVideo(Vedio $video){
            $video->delete();
            return back();
        }
}
