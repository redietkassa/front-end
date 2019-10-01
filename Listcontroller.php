<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class Listcontroller extends Controller

{
  public function show()
{
$characters=[
'addisu'=>'forgery',
'tesfaye'=>'assault',
'aklilu'=>'theft',
'abera'=> 'murder'
];
return view('welcome')->withCharacters($characters);
}

}
