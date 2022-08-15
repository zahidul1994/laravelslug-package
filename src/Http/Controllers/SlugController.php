<?php

namespace Sohibd\Laravelslug\Http\Controllers;

use Illuminate\Http\Request;
use Sohibd\Laravelslug\Generate;
use App\Http\Controllers\Controller;


class SlugController extends Controller
{
  public function index(){
    $slug= Generate::Bnslug(config('laravelslug.demo'));
    $value=config('laravelslug.demo');
        return view('laravelslug::laravelslug',compact('value','slug'));
}
    public function store(Request $request){
      $slug=Generate::Bnslug($request->slug);
        $value=$request->slug;
        return view('laravelslug::laravelslug',compact('value','slug'));
         
          
}
   

}
