<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogTema;

use function Psy\debug;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
         $posts = Blog::all();
        // return view('Blog.index')->with('blogs', $posts);
        return view('Blog.post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postadd()
    {
        $temas = BlogTema::all()->toArray();
       
        return view('Blog.postadd', compact('temas'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postsave(Request $request)
    {
        $posts = new Blog();
        $posts->Estatus = $request->get('estatus');
        $posts->Titulo = $request->get('titulo');
        $posts->Contenido = $request->get('contenido');
        $posts->IDTema = $request->get('tema');
        $posts->url_image = "prueba/1";
        $posts->save();

        return redirect('/Blog/posts');
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
    public function postedit($id)
    {
        $post = Blog::find($id);
        $temas = BlogTema::all();
        return view('Blog.postedit', compact('post','temas'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postupdate(Request $request, $id)
    {
        $posts = Blog::find($id);
        $posts->Estatus = $request->get('estatus');
        $posts->Titulo = $request->get('titulo');
        $posts->Contenido = $request->get('contenido');
        $posts->IDTema = $request->get('tema');
        $posts->url_image = "prueba/1";
        $posts->save();

        return redirect('/Blog/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postdelete($id)
    {
        $post = Blog::find($id);
    if($post != null){
$post->delete();
        }
        

        return redirect('Blog/posts');
    }


    public function publicacion(){

        // $publicaciones = Blog::paginate(8); 
        // $temas = BlogTema::all()->toArray();
        // $publicaciones = Blog::join("blog_temas","blog_temas.id", "=", "blogs.IDTema")
        // ->where('Estatus', 2)->latest('blogs.id')
        // ->paginate(8);


// consulta select especifica
        // $publicaciones = Blog::join("blog_temas","blog_temas.id", "=", "blogs.IDTema")
        // ->select('blog_temas.Nombre as tema')
        // ->get();

        $publicaciones = Blog::latest('id')->paginate(3);
        $temas = BlogTema::latest('id')->paginate(5);
        return view('Blog.blog', compact('publicaciones', 'temas'));
    }


    // public function article($article){
    //     return view('Blogs.article', compact('article'));
    // }



    // -----------------------Blog Tema-----------------------------
 public function tema()
    {
        $temas = BlogTema::all();
        return view('Blog.tema')->with('temas', $temas);
    }

public function temaadd()
    {
        return view('Blog.temaadd');
    }

public function temasave(Request $request)
    {
        $temas = new BlogTema();
        $temas->Nombre = $request->get('nombre');
        $temas->Descripcion = $request->get('descripcion');
    
        $temas->save();

        return redirect('/Blog/temas');
    }    
}
