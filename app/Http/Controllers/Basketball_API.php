<?php

namespace App\Http\Controllers;

use App\Models\Basketball;
use Illuminate\Http\Request;

class Basketball_API extends Controller
{
    public function index($id=null)
    {
        $basketball=new Basketball();
        return $id?$basketball->find($id):$basketball->all();
    }
}
