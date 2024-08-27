<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
   public function index(){
    return view('formview');
   } 
   public function getData(Request $request){
    
$name = request('name');
$email = request('email');
$age = request('age');
$query = DB::insert("INSERT INTO `insertion` (`email`,`name`,`age`) VALUES(?,?,?)",[$email,$name,$age]);
if ($query) {
   redirect()->route('show');
} else {
    echo "Failed inserted data";
}
   }

public function showData(){
$data = DB::select('SELECT * FROM insertion');
return View('showdata',compact('data'));
}

public function update($id){
    $id=$id;
    $data =DB::select('SELECT * FROM insertion WHERE id = ?', [$id]);
    return View('updateview',compact('data'));


}
public function updateData(Request $request){
   $name =request('name');
   $email =request('email');
   $age =request('age');
   $id=request('id');
   $query=DB::update("UPDATE `insertion` SET `email`=?, `name`=?,`age`=? WHERE id = ?",[$email,$name,$age,$id]);
   if($query){
      return redirect()->route('show');
   }
   else{
      echo "Error";
   }
}
public functiion deleteData(id){
   $id=$id;
   $query=DB::delete('DELETE FROM insertion where id =?', [$id]);
   if ($query) {
      return redirect()->route('show');
      
   }

}


}
