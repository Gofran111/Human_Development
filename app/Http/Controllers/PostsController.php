<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

use DB;

use App\Books;
use App\Vedio;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function index() {
    //    // $posts = Post::all();
    //    //$posts = Post::take(5)->get();
    //    //$posts = DB::select('select * from posts');
    //    $posts = Post::orderBy('id','desc')->paginate(5);
    //     $count = Post::count();
    //     return view('posts.index', compact('posts','count'));
    // }


    // //show page
    // public function show($id){
    //     // dd($id);
       
    //     $post = Post::find($id);
    //     return view('posts.show', compact('post'));
    // }

    //upload books
    public function getView(){
        return view('upload');
    }

    //uploadviedo
    public function getVideo(){
        return view('uploadvideo');
    }

    //insert
    public function insert(Request $request){
      $this->validate(request(),[
        'name' => 'required',
        'description' => 'required',
        'file'=>'required'
      ]);
      $data = new Books();
      $file = $request->file;
      $filename = 'Books'. '_' .time(). '.'. $file->getClientOriginalExtension();
      $request->file->move('storage/books', $filename);
      $data->file = $filename;

      $data->name = $request->name;
      $data->description = $request->description;

    //   $input = $request->all();
    //   if($request -> hasFile('image')){
    //      // $des_path ='public\assets' ;
    //       $image = $request->file('image');
    //       $img_name = $image->getClientOriginalName();
    //       $path = $request->file('image')->storeAs('assets', $img_name);

    //       $input['image'] = $img_name;

    //   }else{
    //      // input['image'] = No_img;
    //   };

      $data->save();
      return redirect()->back()->with('status', 'Book Added');
    }


     //insertVideo
     public function insertVideo(Request $request){
      $this->validate(request(),[
        'name' => 'required',
        'description' => 'required',
        'file'=>'required'
      ]);
        $videos = new Vedio();
        $file = $request->file;
        $filename = 'videos'. '_' .time(). '.'. $file->getClientOriginalExtension();
        $request->file->move('storage/videos', $filename);
        $videos->file = $filename;
  
        $videos->name = $request->name;
        $videos->description = $request->description;
  
 /*     //   $input = $request->all();
      //   if($request -> hasFile('image')){
      //      // $des_path ='public\assets' ;
      //       $image = $request->file('image');
      //       $img_name = $image->getClientOriginalName();
      //       $path = $request->file('image')->storeAs('assets', $img_name);
  
      //       $input['image'] = $img_name;
  
      //   }else{
      //      // input['image'] = No_img;
      //   };*/
        $videos->save();
        return redirect()->back()->with('status', 'Video  Added'); 
            }


    
      //download book
    public function download(Request $request, $file){
        //return respones()->download(public_path('books/'.$file));
        return response()->download('storage/books/'.$file);
    }


    //download videos
    public function downloadVideo(Request $request, $file){
        return response()->download('storage/videos/'.$file);
    }




}
