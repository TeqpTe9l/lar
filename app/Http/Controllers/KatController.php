<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kat;
class KatController extends Controller
{
     public function table2(){
        $elements=new Kat();
        return view('kat',['elements'=>$elements->simplePaginate(10)]);
      }


  public function create() { 

    return view('form2'); 
   }  

   public function store(Request $request) { 
    $contact = new Kat;
    $contact->image = $request->image;
$contact->model=$request->model; 
$contact->price=$request->price;
$contact->diagon=$request->diagon;
$contact->razr=$request->razr;
$contact->matr=$request->matr;
$contact->chast=$request->chast;
$contact->id_bran=$request->id_bran;
$contact->tip=$request->tip;

    $contact->save();

    return redirect('/kat');

}
//для кнопки детали
public function showOneMessage($id){
  $contact = new Kat;

return view('one-kat',['el'=>$contact->find($id)]);
}
//для кнопки изменить 
public function updateMessage($id){
  $contact = new Kat;

return view('kat-update',['el'=>$contact->find($id)]);
}
public function updateMessageSubmit ($id, Request $request) { 
    $contact =  Kat::find($id);
    $contact->image = $request->image;
$contact->model=$request->model; 
$contact->price=$request->price;
$contact->diagon=$request->diagon;
$contact->razr=$request->razr;
$contact->matr=$request->matr;
$contact->chast=$request->chast;
$contact->id_bran=$request->id_bran;
$contact->tip=$request->tip;
    $contact->save();

    return redirect('/kat');
}
public function deleteMessage($id){
  $contact =  Kat::find($id)->delete();
  return redirect('/kat');
}}

