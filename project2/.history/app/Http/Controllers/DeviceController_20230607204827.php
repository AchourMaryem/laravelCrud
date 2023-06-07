<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
   function list($id=null){
    return $id?Device::find($id):Device::all();
   }
   function add(Request $req)
   {
    $device=new Device;
    $device->id=$req->id;
    $device->name=$req->name;
    $device->nb_id=$req->nb_id;
    $device->test_id=$req->test_id;
    $result=$device->save();
    if($result){
        return ["Result"=>"Data has been saved"];
    }
    else{
    }
    return ["Result"=>"Data Not saved "];
   }
   function update(Request $req)
   {
    $device= Device::find($req->id);
    $device->name =$req->name;
    $device->nb_id=$req->nb_id;
    $device->test_id=$req->test_id;
    $result= $device->save();
    if($result){
        return ["Result"=>"Data has been saved"];
    }
    else{
    }

    return [ "Result"=>"Data has been updated"];
   }
   function delete($id){
    $delete=Device::find($id);
    $de
return ["result"=>"record has been delete".$id];
   }
}

