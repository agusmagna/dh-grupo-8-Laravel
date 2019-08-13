<?php

namespace App\Http\Controllers;

use \App\Capsules;
use Illuminate\Http\Request;

class CapsulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productosCapsulas = Capsules::latest()->limit(4)->get();
      return view ('index',['products' => $productosCapsulas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $form)
    {
      return view('admin/agregarCapsula' , [
        'capsula' => new Capsules
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $form)
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
        $capsulaNueva->imageCapsule =  $form->file('imageCapsule')->store('public/capsules');
        $capsulaNueva->imageProduct =  $form->file('imageProduct')->store('public/capsules');
        $capsulaNueva->price =  $form['price'];
        $capsulaNueva->flavor = $form['flavor'];
        $capsulaNueva->stock =  $form['stock'];

        $capsulaNueva->save();
        return redirect ('panelAdmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Capsules $id)
    {
        $productos = Capsules::find($id);
        return view('products/capsules',[
          'products'=> $productos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $capsula = Capsules::find($id);
      return view ('admin.editarCapsulas', ['capsula' =>$capsula]);
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
      $capsula = Capsules::findOrFail($id);

      if ($request->hasFile('imageCapsule')) {
        $capsula->image = $request->file('imageCapsule')->store('public/capsules');
      }

      $changes = array_diff($request->all(), $capsula->toArray());

      $capsula->update($changes);

      return redirect ('panelAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $form)
    {
      $id = $form['id'];
      $productosCapsulas = Capsules::find($id);
      $productosCapsulas->delete();

      return redirect ('panelAdmin');
    }

    public function search(Request $request)
    {
      $productos = Capsules::where('name','like','%' . $request['quest'] . '%')
                    ->paginate(6);

      return view('products/capsules',[
        'products'=> $productos
      ]);
    }
  
}
