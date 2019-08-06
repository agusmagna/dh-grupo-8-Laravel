<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Machines;
use \App\Capsules;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        $productosMaquinas = Machines::all();
        $productosCapsulas = Capsules::all();

        return view('admin/panelAdmin',[
          'machines'=> $productosMaquinas,
          'capsules'=> $productosCapsulas

        ]);

    }*/

  public function index()
    {
      $productosCapsulas = Capsules::all();
      return view('admin/panelAdmin',compact('productosCapsulas'));
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
    public function create_capsule(Request $form)
    {
      $reglas= [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'imageCapsule' => 'mimetypes:image/png,image/jpeg,image/jpg',
        'imageProduct' => 'mimetypes:image/png,image/jpeg,image/jpg',
        'price' => 'required|numeric',
        'flavor' => 'required|string|max:255',
        'stock' => 'required|integer'
      ];
      $mensajes = [
        'string'=> "El campo :attribute debe ser un texto",
        'max'=> "El campo :attribute debe tener un máximo de :max",
        'numeric'=> "El campo :attribute debe ser un número",
        'integer'=> "El campo :attribute debe ser un número entero",
        'mimetypes' => "El campo :attribute debe ser .png,.jpeg o .jpg"
      ];
      $this->validate($form, $reglas, $mensajes);

      $capsulaNueva = new Capsules();

      $capsulaNueva->name = $form['name'];
      $capsulaNueva->description = $form['description'];
      $capsulaNueva->imageCapsule =  $form['imageCapsule'];
      $capsulaNueva->imageProduct =  $form['imageProduct'];
      $capsulaNueva->price =  $form['price'];
      $capsulaNueva->flavor =  $form['flavor'];
      $capsulaNueva->stock =  $form['stock'];

      $capsulaNueva->save();
      return redirect ('panelAdmin');
    }




    public function create_machine(Request $form)
    {
      $reglas= [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'image' => 'mimetypes:image/png,image/jpeg,image/jpg',
        'price' => 'required|numeric',
        'color' => 'required|string|max:255',
        'stock' => 'required|integer'
      ];
      $mensajes = [
        'string'=> "El campo :attribute debe ser un texto",
        'max'=> "El campo :attribute debe tener un máximo de :max",
        'numeric'=> "El campo :attribute debe ser un número",
        'integer'=> "El campo :attribute debe ser un número entero",
        'mimetypes' => "El campo :attribute debe ser .png,.jpeg o .jpg"
      ];
      $this->validate($form, $reglas, $mensajes);

      $MaquinaNueva = new Machines();
      $MaquinaNueva->name = $form['name'];
      $MaquinaNueva->description = $form['description'];
      $MaquinaNueva->image =  $form['image'];
      $MaquinaNueva->price =  $form['price'];
      $MaquinaNueva->color =  $form['color'];
      $MaquinaNueva->stock =  $form['stock'];

      $MaquinaNuevo->save();
      return redirect ('panelAdmin');
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
