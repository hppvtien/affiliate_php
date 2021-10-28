<?php
    
namespace App\Http\Controllers;
    
use App\Models\Post;
use Illuminate\Http\Request;
    
class PostController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::latest()->paginate(5);
        return view('post.index',compact('post'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Post::create($request->all());
    
        return redirect()->route('post.index')
                        ->with('success','Post created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $Post)
    {
        return view('post.show',compact('Post'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Post)
    {
        return view('post.edit',compact('Post'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $Post)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $Post->update($request->all());
    
        return redirect()->route('post.index')
                        ->with('success','Post updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $Post)
    {
        $Post->delete();
    
        return redirect()->route('post.index')
                        ->with('success','Post deleted successfully');
    }
}