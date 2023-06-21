<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sotr;
class sotrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen('/var/www/html/lar/database/csv/sotrudniki.txt', 'r');
while(!feof($file)){
$data = explode(';', fgets($file));
Sotr::create([
'fam'=>$data[1],
'im'=> $data[2],
'otch'=>$data[3],
'graj'=> $data[4],
'staj'=> $data[5],
'kod_otd'=> $data[6],
'spec'=> $data[7],
'zarp'=> $data[8],
'tel'=> $data[9],

]);} 
    }
}
