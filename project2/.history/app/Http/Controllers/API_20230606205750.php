<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class API extends Controller
{
    function getData(){
        return ["name"=>"mariem","email"=>"mariem@gmail.com","address"];
    }
}
