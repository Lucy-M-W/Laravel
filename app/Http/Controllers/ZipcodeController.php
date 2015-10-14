<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZipcodeController extends Controller
{

public function postSearch()
  {
      $q = Input::get('zip_codes');
   
      $Zipcode_form = $this->post->whereRaw(
          "MATCH(City,State) AGAINST(Zipcode IN BOOLEAN MODE)",
          array($q)
      )->get();
   
      return View::make('Zipcode_form', compact('Zipcode_form'));
   
  }
 

    }