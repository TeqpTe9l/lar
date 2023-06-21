<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tov;
class aksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('/var/www/html/lar/database/csv/axes.txt', 'r');
while(!feof($file)){
$data = explode(';', fgets($file));
Tov::create([
'image'=>$data[1],
'model'=> $data[2],
'price'=>$data[3],
'nazv_id'=> $data[4],
'tip'=> $data[5],
'interf'=> $data[6],
'opis'=> $data[7],
'garant'=> $data[8],
]);}  
    }
}
