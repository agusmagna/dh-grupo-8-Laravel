<?php

namespace App\Http\Controllers;

<<<<<<< HEAD:app/Http/Controllers/CapsulasController.php
use \App\Capsula;
=======

>>>>>>> a88a8325bf45281aa323bfb2fb4e0fb2db10989e:app/Http/Controllers/productsController.php
use Illuminate\Http\Request;
use \App\Capsules;
use \App\Machines;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
<<<<<<< HEAD:app/Http/Controllers/CapsulasController.php
        $productosCapsulas = Capsula::all();
        //dd(compact('productosCapsulas'));
        return view('admin/paneladmin',compact('productosCapsulas'));
=======
        $productosCapsulas = Capsules::all();
        $machines = Machines::all();
        return view ('products',['capsulas' => $productosCapsulas,'machines'=> $machines]);
>>>>>>> 7aaa6c38ac99a078eebc77144f1da4cd55fff86d
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $form)
    {
      $capsulaNueva = new Capsules();
      $capsulaNueva->name = $form['name'];
      $capsulaNueva->description = $form['description'];
      $capsulaNueva->imageCapsule =  $form['imageCapsule'];
      $capsulaNueva->imageProduct =  $form['imageProduct'];
      $capsulaNueva->price =  $form['price'];
      $capsulaNueva->flavor =  $form['flavor'];
      $capsulaNueva->stock =  $form['stock'];

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
