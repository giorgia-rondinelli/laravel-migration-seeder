<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;
use Illuminate\Support\Composer;

class pagecontroller extends Controller
{
    public function index(){
        return view('home ');
    }

    public function listaTreni(){

        $trains= train::paginate(10);
        return view('lista-treni',compact('trains'));
    }


}
