<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    //
    public function getProfile(Request $request){
        return  $request->profile ? 'no profile' : 'profile';
    }
}
