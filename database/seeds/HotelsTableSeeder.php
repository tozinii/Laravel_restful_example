<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i = 1; $i < 6; $i++){
        DB::table('hotels')->insert([
          'name'=>'Hotel'.$i
        ]);
      }
    }
}
