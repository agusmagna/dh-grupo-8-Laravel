<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CapsulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('capsules')->insert(
        [
          'name'=>'Blondie',
          'description'=>'Masa húmeda fundida con chocolate blanco belga y coco',
          'imageCapsule'=>'public/capsulas/blondie.png',
          'imageProduct'=>'public/producto_final/blondie-chocolate.png',
          'price'=>50.00,
          'flavor'=>'Chocolate blanco y coco',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'ChocoFudge',
          'description'=>'Puro chocolate húmedo, salpicado de nueces y chocolate belga semiamargo',
          'imageCapsule'=>'public/capsulas/chocofudge.png',
          'imageProduct'=>'public/producto_final/chocofudge.png',
          'price'=>50.00,
          'flavor'=>'Chocolate',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'Cookie',
          'description'=>'Masa a base de galleta con avena y pasas de uva',
          'imageCapsule'=>'public/capsulas/cookie.png',
          'imageProduct'=>'public/producto_final/cookie.png',
          'price'=>50.00,
          'flavor'=>'Galleta',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'Crumble de manzana',
          'description'=>'Una delicia de manzanas con una cubierta que se desmigaja',
          'imageCapsule'=>'public/capsulas/crumble-manzana.png',
          'imageProduct'=>'public/producto_final/crumble_manzana.png',
          'price'=>50.00,
          'flavor'=>'Manzana',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'Muffin de frambuesa',
          'description'=>'Bizcochuelo esponjoso con un sabor fresco y frutado',
          'imageCapsule'=>'public/capsulas/muffin-frambuesa.png',
          'imageProduct'=>'public/producto_final/muffin-frambuesa.png',
          'price'=>50.00,
          'flavor'=>'Frambuesa',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'Scon cítrico',
          'description'=>'Scon crocante por fuera y suave en su interior con sabor a limón',
          'imageCapsule'=>'public/capsulas/scon-citrico.png',
          'imageProduct'=>'public/producto_final/scon-citrico.png',
          'price'=>50.00,
          'flavor'=>'Limón',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'Soufflé de queso',
          'description'=>'El clásico francés, ligero y aireado',
          'imageCapsule'=>'public/capsulas/souffle.png',
          'imageProduct'=>'public/producto_final/souffle-queso.png',
          'price'=>50.00,
          'flavor'=>'Queso',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('capsules')->insert(
        [
          'name'=>'Volcán de dulce de leche',
          'description'=>'Bizcochuelo que al cortarlo libera el cremoso relleno a base de dulce de leche',
          'imageCapsule'=>'public/capsulas/volcanddl.png',
          'imageProduct'=>'public/producto_final/volcanddl.png',
          'price'=>50.00,
          'flavor'=>'Dulce de leche',
          'stock'=>500,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
      );
    }
}
