<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
   function list($id=null){
    return Device::find($id);
   }
}
