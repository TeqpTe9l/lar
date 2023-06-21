<?php

namespace App\Http\Controllers;
use App\Models\Sotr;
use Illuminate\Http\Request;

class SotrController extends Controller
{
    public function table1(){
        $elements=new Sotr();
        return view('sotr',['elements'=>$elements->simplePaginate(10)]);
      }


  public function create() { 

    return view('form1'); 
   }  

   public function store(Request $request) { 
    $contact = new Sotr;
    $contact->fam = $request->fam;
    $contact->im=$request->im; 
    $contact->otch=$request->otch;
    $contact->graj=$request->graj;
    $contact->staj=$request->staj;
    $contact->kod_otd=$request->kod_otd;
    $contact->spec=$request->spec;
    $contact->zarp=$request->zarp;
     $contact->tel=$request->tel;

    $contact->save();

    return redirect('/sotr');

}
//для кнопки детали
public function showOneMessage($id){
  $contact = new Sotr;

return view('one-sotr',['el'=>$contact->find($id)]);
}
//для кнопки изменить 
public function updateMessage($id){
  $contact = new Sotr;

return view('sotr-update',['el'=>$contact->find($id)]);
}
public function updateMessageSubmit ($id, Request $request) { 
    $contact =  Sotr::find($id);
    $contact->fam = $request->fam;
    $contact->im=$request->im; 
    $contact->otch=$request->otch;
    $contact->graj=$request->graj;
    $contact->staj=$request->staj;
    $contact->kod_otd=$request->kod_otd;
    $contact->spec=$request->spec;
    $contact->zarp=$request->zarp;
     $contact->tel=$request->tel;

    $contact->save();

    return redirect('/sotr');
}
public function deleteMessage($id){
  $contact =  Sotr::find($id)->delete();
  return redirect('/sotr');
}}

