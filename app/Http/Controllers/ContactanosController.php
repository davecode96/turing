<?php

namespace App\Http\Controllers;
use App\Models\Contactanos;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
         $contactanoss = Contactanos::all();
        // return view('Blog.index')->with('blogs', $posts);
        return view('Contactanos.contactanosadmin', compact('contactanoss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactanosadd()
    {
        return view('Contactanos.contactanos');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactanossave(Request $request)
    {
        $contactanoss = new Contactanos();
        $contactanoss->Nombre = $request->get('nombre');
        $contactanoss->Email = $request->get('email');
        $contactanoss->Tel = $request->get('tel');
        $contactanoss->Puesto = $request->get('puesto');
        $contactanoss->Empresa = $request->get('empresa');
        $contactanoss->Asunto = $request->get('asunto');
        $contactanoss->Contenido = $request->get('contenido');

        $contactanoss->save();

        return redirect('/Contactanos');
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
}
