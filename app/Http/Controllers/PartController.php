<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
class PartController extends Controller
{
    public function table(){
    $elements=new Part();
    return view('part',['elements'=>$elements->simplePaginate(10)]);
  }


  public function create() { 

    return view('form'); 
   }  

   public function store(Request $request) { 
    $contact = new Part;

    $contact->kod_podr = $request->kod_podr;
    $contact->fam_sotr=$request->fam_sotr; 
    $contact->kod_tov=$request->kod_tov;
    $contact->gorod=$request->gorod;
    $contact->adres=$request->adres;
    $contact->strana=$request->strana;
    $contact->ves=$request->ves;
    $contact->sum=$request->sum;

    $contact->save();

   return redirect('/part');

   }
   //для кнопки подробнее
public function showOneMessage($id){
  $contact = new Part;

return view('one-part',['el'=>$contact->find($id)]);
}
//для кнопки изменить 
public function updateMessage($id){
  $contact = new Part;

return view('part-update',['el'=>$contact->find($id)]);
}
public function updateMessageSubmit ($id, Request $request) { 
    $contact =  Part::find($id);

    $contact->kod_podr = $request->kod_podr;
    $contact->fam_sotr=$request->fam_sotr; 
    $contact->kod_tov=$request->kod_tov;
    $contact->gorod=$request->gorod;
    $contact->adres=$request->adres;
    $contact->strana=$request->strana;
    $contact->ves=$request->ves;
    $contact->sum=$request->sum;

    $contact->save();

   return redirect('/part');
}
public function deleteMessage($id){
  $contact =  Part::find($id)->delete();
  return redirect('/part');
}}

