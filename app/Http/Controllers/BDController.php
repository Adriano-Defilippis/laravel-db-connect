<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;
use App\Pagamento;
use App\Pagante;

class BDController extends Controller
{
  public function getOspiti(){

    $type = "Ospiti";
    $values = Ospite::all();
    $color = "orange";
    return view('ospitiBox', compact('type', 'values', 'color'));
  }

  public function getPagamenti(){

    $type = "Pagamenti";
    $values = Pagamento::all();
    $max = Pagamento::all()->max('price');
    $min = Pagamento::all()->min('price');
    $avg = Pagamento::all()->avg('price');
    $color = "purple";
    return view('pagamentiBox', compact('type', 'color', 'values', 'max', 'min', 'avg'));
  }

  public function getPaganti(){

    $type = "Paganti";
    $values = Pagante::all();
    $color = "coral";


    return view('pagantiBox', compact('type', 'values', 'color'));
  }

  public function pagamentiOrderDes(){

    $type = "Pagamenti in ordine decrescente";
    $values = Pagamento::orderBy('price' , 'desc')->get();
    $color = 'purple';

    return view('pagamentiBoxDes', compact('type', 'values', 'color'));
  }

}
