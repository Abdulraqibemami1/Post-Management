<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Feedback;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // List Post 

    public function index()
    {
      
        $posts = Post::paginate(3);
        
        return view('post.posts',['posts'=>$posts]);
    }
    public function search(Request $request){
        $search = $request->search;
        $posts = '';
        if(!$request->search == ''){
            $posts = Post::Where('title','like','%'.$search)->orWhere('description','like','%'.$search)->paginate(3);
            return view('post.posts',['posts'=>$posts]);
        }
        $posts = Post::paginate(3);
        
        return view('post.posts',['posts'=>$posts]);
    }

    // Create Post 

    public function create()
    {
       return view('post.create');
    }
    public function about()
    {
        $feedbacks = Feedback::paginate(3);
        return view('post.about',['feedbacks'=>$feedbacks]);
    }
    public function feedback()
    {
        return view('post.feedback');
    }

    public function savefeedback(Request $request)

    {
        $data = $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'feedback' => 'required',
        ],[
            'name' =>'نام کاربری شما ضرور است ',
            'email' =>'ایمل تان ره وارد کنید ',
            'feedback' =>'فیدبک تان ضرور است ( فیدبک تان ماره کمک میکند کی ما به شما خدمات بهتر آرایه کنیم)  ',
            
        ]);
        if($request->email == Feedback::where('email', '=',$request->email)){
            session()->flash('delete','شما قبلا نظر داده اید تشکر بازم ');
            return redirect('/');
        }
        Feedback::create($data);
        session()->flash('create','نظر تان به ما ارسال شد , تشکر از نظر تان ');
        return redirect('/');
    }

    // Save Post 

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg',
        ],[
            'image'=>' پست باید تصویر داشته باشد',
            'title' => 'عنوان پست باید مشخص شود ',
            'description' => 'باید در باره پست  توضیعات بدهید ',
        ]);

        $file = $request->file('image');
        $image = "";
        if(!empty($file)){
            $image = md5(time()).'.'.$file->getClientOriginalExtension();
            $file->move('images',$image);
        }
        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$image
        ]);
        session()->flash('create','پست ساخته شد ');
        return redirect('/');
    }

    // Show Post 

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.single',['post'=>$post]);
      
    }


    // Edit Post 

    public function edit($id)
    {
        return view('post.update',['post'=>Post::find($id)]);
    }

    // Update Post 
    public function update(Request $request, $id)
    {   
        $post = Post::find($id);
        $file = $request->file('image');
        $image = "";
        $data = $request->validate([
            'title'=>'required',
            'description'=> 'required',
        ],[
            'title' => 'عنوان پوست باید مشخص شود',
            'description' => 'پست شما باید توضیعات داشته باشد ',
        ]);

        if(!empty($file)){
            if(file_exists('images/'.$post->image)){
                unlink('images/'.$post->image);
            }
            $image = md5(time()).'.'.$file->getClientOriginalExtension();
            $file->move('images',$image);
        }
        if(empty($file)){          
            $image = Post::find($id)->image;     
        }
        Post::findOrFail($id)->update([
            'title'=>$request->title,
            'description' =>$request->description,
            'image' =>$image,
        ]);
        session()->flash('update',' پست آپدیت  شد');

        return redirect('/');
    }



    public function destroy($id)
    {
        $post = Post::find($id);
        if(file_exists('images/'.$post->image)){
            unlink('images/'.$post->image);
        }
        Post::destroy($id);
        session()->flash('delete',' پست حذف شد');

        return redirect('/');
    }
}
