<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tov;
class TovController extends Controller
{
    public function table3(){
        $elements=new Tov();
        return view('tov',['elements'=>$elements->simplePaginate(10)]);
      }


  public function create() { 

    return view('form3'); 
   }  

   public function store(Request $request) { 
    $contact = new Tov;
    $contact->image=$request->image;
    $contact->model= $request->model;
    $contact->price=$request->price; 
    $contact->nazv_id=$request->nazv_id;
    $contact->tip=$request->tip;
    $contact->interf=$request->interf;
    $contact->opis=$request->opis;
    $contact->garant=$request->garant;
    
    $contact->save();

    return redirect('/tov');

}
//для кнопки детали
public function showOneMessage($id){
  $contact = new Tov;

return view('one-tov',['el'=>$contact->find($id)]);
}
//для кнопки изменить 
public function updateMessage($id){
  $contact = new Tov;

return view('tov-update',['el'=>$contact->find($id)]);
}
public function updateMessageSubmit ($id, Request $request) { 
    $contact =  Tov::find($id);
    $contact->image=$request->image;
    $contact->model= $request->model;
    $contact->price=$request->price; 
    $contact->nazv_id=$request->nazv_id;
    $contact->tip=$request->tip;
    $contact->interf=$request->interf;
    $contact->opis=$request->opis;
    $contact->garant=$request->garant;
    $contact->save();
    return redirect('/tov');
}
public function deleteMessage($id){
  $contact =  Tov::find($id)->delete();
  return redirect('/tov');
}}






