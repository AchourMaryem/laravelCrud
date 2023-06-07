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
    $device->id=$req->id;
    $device->name=$req->name;
    $device->nd_id=$req->nd_id;
    $device->test_id=$req->test_id;
    $result=$device->save();
    if($result){
        return ["Result"=>"Data has been saved"];
    }
    else{
    }
    return ["Resultat"=>"Data has been saved"];
   }
   
}

