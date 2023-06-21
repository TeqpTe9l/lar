<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Part;
class partSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $file = fopen('/var/www/html/lar/database/csv/post.txt', 'r');
while(!feof($file)){
$data = explode(';', fgets($file));
Part::create([
'kod_podr'=>$data[1],
'fam_sotr'=> $data[2],
'kod_tov'=>$data[3],
'gorod'=> $data[4],
'adres'=> $data[5],
'strana'=> $data[6],
'ves'=> $data[7],
'sum'=> $data[8],


]);} 
    }
}
