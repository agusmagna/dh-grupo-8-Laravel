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
         return view('admin/agregarMaquina' , [
           'maquina' => new Machines
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
        $MaquinaNueva->image =  $form->file('image')->store('public/machines');
        $MaquinaNueva->price =  $form['price'];
        $MaquinaNueva->color =  $form['color'];
        $MaquinaNueva->stock =  $form['stock'];

        $MaquinaNueva->save();
        return redirect ('panelAdmin');
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
          $maquina = Machines::find($id);
          return view ('admin.editarMaquinas', ['maquina' =>$maquina]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $form, $id)
    {
        $maquina = Machines::findOrFail($id);



        $maquina->name = $form['name'];
        $maquina->description = $form['description'];
        $maquina->image =  $form->file('image')->store('public/machines');
        $maquina->price =  $form['price'];
        $maquina->color =  $form['color'];
        $maquina->stock =  $form['stock'];


        $maquina->update();

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
      $maquina = Machines::find($id);
      $maquina->delete();

      return redirect ('panelAdmin');
    }

}
