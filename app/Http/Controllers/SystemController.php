<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use Illuminate\Support\Str;
use Validator;
class SystemController extends Controller
{
    //

    public function index()
    {
      $System=System::orderBy('id','DESC')->paginate(10);

      return view('index',compact('System'));
    }

public function addnewmovie()
{

  return view('addmovie');
}

public function savenewmovie(Request $request)
{
  $validatedData = $request->validate([
   'title' =>['required','max:100'],
   'rdate'=>['max:255'],
   'rating' =>['required','max:4'],
   ]);

   $image = $request->file('photo');
   $image_url = '';

    if($image)
    {
       $page_image_name=date('dmy_H_s_i').Str::random(3);
       $ext=strtolower($image->getClientOriginalExtension());
       $upload_path='media/';
       $fullname_image=$page_image_name.'.'.$ext;
       $image_url=$upload_path.$fullname_image;
       $image->move($upload_path,$fullname_image);
    }
   if (!$validatedData)
 {
 return route('add-new-movie');

 }
 else
 {
// return $request->all();
$System = new System;
$System->title = $request->title;
$System->rdate = $request->rdate;
$System->rating = $request->rating;
$System->photo = $image_url;
$System->save();
 }

 return back()->with('success', 'Data has been Save');
}

}
