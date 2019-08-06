<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Machines;

class MaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_machines()
    {
      $productosMaquinas = Machines::all();
      //dd(compact('productosCapsulas'));
      return view('admin/paneladmin',compact('productosMaquinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $form)
     {
       $MaquinaNueva = new Machines();
       $MaquinaNueva->name = $form['name'];
       $MaquinaNueva->description = $form['description'];
       $MaquinaNueva->image =  $form['image'];
       $MaquinaNueva->price =  $form['price'];
       $MaquinaNueva->flavor =  $form['flavor'];
       $MaquinaNueva->stock =  $form['stock'];

       $productoNuevo->save();
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
