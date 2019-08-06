<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $productosCapsulas = Capsules::all();
        // dd(compact('productosCapsulas'));
        return view('admin/paneladmin',compact('productosCapsulas'));

    }

    public function directory($category){
      if ($category == 'machines') {
        $products = Machines::all();
      return view ('products/machines',['products' => $products]);
      } elseif($category == 'capsules'){
        $products = Capsules::paginate(6);
      return view ('products/capsules',['products' => $products]);
    } else {
      return view ('categories');
    }
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
    public function home()
    {
      $productosCapsulas = Capsules::latest()->limit(4)->get();
      return view ('index',['products' => $productosCapsulas]);
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
