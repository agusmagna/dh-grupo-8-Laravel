<?php

use Illuminate\Database\Seeder;

class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('machines')->insert(
        [
          'name'=>'White',
          'description'=>'Máquina con lugar para dos cápsulas color blanco',
          'image'=>'/machines/FFFFFF.png',
          'price'=>5000.00,
          'color'=>'white',
          'stock'=>500,
        ]);
        DB::table('machines')->insert(
          [
            'name'=>'Bone',
            'description'=>'Máquina con lugar para dos cápsulas color hueso',
            'image'=>'/machines/D7CDC5.png',
            'price'=>5000.00,
            'color'=>'#D7CDC5',
            'stock'=>500,
          ]);
        DB::table('machines')->insert(
          [
            'name'=>'Dark grayish orange',
            'description'=>'Máquina con lugar para dos cápsulas color gris oscuro',
            'image'=>'/machines/5F5B57.png',
            'price'=>5000.00,
            'color'=>'#5F5B57',
            'stock'=>500,
          ]);
        DB::table('machines')->insert(
          [
            'name'=>'Grayish orange',
            'description'=>'Máquina con lugar para dos cápsulas color naranja grisáceo',
            'image'=>'/machines/BCA99B.png',
            'price'=>5000.00,
            'color'=>'#BCA99B',
            'stock'=>500,
          ]);
        DB::table('machines')->insert(
          [
            'name'=>'Dark grayish violet',
            'description'=>'Máquina con lugar para dos cápsulas color violeta grisáceo oscuro',
            'image'=>'/machines/5C535F.png',
            'price'=>5000.00,
            'color'=>'#5C535F',
            'stock'=>500,
          ]);
        DB::table('machines')->insert(
          [
            'name'=>'Gray',
            'description'=>'Máquina con lugar para dos cápsulas color gris',
            'image'=>'/machines/B9B5B0.png',
            'price'=>5000.00,
            'color'=>'#B9B5B0',
            'stock'=>500,
          ]);
        DB::table('machines')->insert(
          [
            'name'=>'Dark blue',
            'description'=>'Máquina con lugar para dos cápsulas color azul',
            'image'=>'/machines/4B647F.png',
            'price'=>5000.00,
            'color'=>'#4B647F',
            'stock'=>500,
          ]);
    }
}
