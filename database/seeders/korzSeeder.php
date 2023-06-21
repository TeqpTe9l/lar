<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monitor;
class korzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $file = fopen('/var/www/html/lar/database/csv/katalog.txt', 'r');
while(!feof($file)){
$data = explode(';', fgets($file));
Monitor::create([
'model'=>$data[1],
'price'=> $data[2],
'diagon'=>$data[3],
'razr'=> $data[4],
'matr'=> $data[5],
'chast'=> $data[6],
'brand1_id'=> $data[7],
'image'=> $data[8],
'tip'=> $data[9],
]);} 
    }
}
