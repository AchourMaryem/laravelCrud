<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
   function list($id=null){
    return $id?Device::find($id):Device::all();
   }
   function add(REQUEST $req)
   {
    $device=new Device;
    $device->id name nd_id test
    return ["Resultat"=>"Data has been saved"];
   }
   
}

