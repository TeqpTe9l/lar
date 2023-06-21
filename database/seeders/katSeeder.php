<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kat;
class katSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('/var/www/html/lar/database/csv/monitory1.txt', 'r');
while(!feof($file)){
$data = explode(';', fgets($file));
Kat::create([
'image'=>$data[1],
'model'=> $data[2],
'price'=>$data[3],
'diagon'=> $data[4],
'razr'=> $data[5],
'matr'=> $data[6],
'chast'=> $data[7],
'id_bran'=> $data[8],
'tip'=> $data[9],

]);} 
    }
}
