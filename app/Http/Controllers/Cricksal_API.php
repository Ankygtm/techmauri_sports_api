<?php

namespace App\Http\Controllers;

use App\Models\Cricksal;
use Illuminate\Http\Request;

class Cricksal_API extends Controller
{
    public function index($id=null)
    {
        $cricksal=new Cricksal();
        return $id?$cricksal->find($id):$cricksal->all();

    }
}
