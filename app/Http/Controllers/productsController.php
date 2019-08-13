<?php

namespace App\Http\Controllers;



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
    public function index()
    {
        $productosMaquinas = Machines::paginate(5);
        $productosCapsulas = Capsules::paginate(5);

        return view('admin.panelAdmin',[
          'machines'=> $productosMaquinas,
          'capsules'=> $productosCapsulas,
        ]);
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
}
