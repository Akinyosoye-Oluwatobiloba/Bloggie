<?php

namespace App\Http\Controllers;


use App\Models\Post;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function create(){

        return view('create');

    }
    public function blog(){
        $blogs = Post::all();
        return view('blog',compact('blogs'));
    }
    public function delete($id){
        $post_id= Post::find($id);
        $post_id->delete();
        return redirect()->back();
    }

    public function add_blog(Request $request)
    {
        $blog = new Post;
        $blog->title = $request->title;
        $blog->description= $request->description;
        //getting image
        if($request->hasFile('image')){
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $filename= time().'.'.$ext;
        $image->move('uploads/blogs/',$filename);

        $blog->image = $filename;
    }
    $blog->save();

        return redirect()->back();

    }
    //08024301421
    //update blog
    public function update(Post $blog,$id ){
        $blog =Post::find($id)->get();
        // $blog=Post::all()->where('id',$id);
        return view('updateblog',compact('blog'));
    }


    public function update_blog(Request $request,$blog){

        //  $blogs =Post::find($id)->get(); //To find the blog that has this id
        $blog = Post::findOrFail($blog);
        $blog= new Post;
        $blog->title = $request->title;

        $blog->description= $request->description;

        //getting image
        if($request->hasFile('image')){

            $path ='uploads/blogs/'.$blog->image;

            if(File::exists($path)){
                File::delete($path);
            }
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $filename= time().'.'.$ext;
        $image->move('uploads/blogs/'.$filename);

        $blog->image = $filename;
    }
    $blog->update();

        return redirect()->back();
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
