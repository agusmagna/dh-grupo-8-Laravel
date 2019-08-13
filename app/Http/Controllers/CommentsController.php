<?php

namespace App\Http\Controllers;

use \App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $form)
    {
        return view('comentarios', [
          'comments'=> new Comment
        ]);
    }
    public function store(Request $form)
    {
        $reglas= [
          'name' => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'comentarios' => 'required|string|max:500'
        ];
        $mensajes = [
          'string'=> "El campo :attribute debe ser un texto",
          'max'=> "El campo :attribute debe tener un máximo de :max",
          'email'=> "El campo :attribute debe ser un email"
        ];
        $this->validate($form, $reglas, $mensajes);

        $ComentarioNuevo = new Comment();
        $ComentarioNuevo->name = $form['name'];
        $ComentarioNuevo->email = $form['email'];
        $ComentarioNuevo->comentarios =  $form['comentarios'];

        $ComentarioNuevo->save();
        return redirect ('Contacto');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
