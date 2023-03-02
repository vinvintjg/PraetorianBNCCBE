<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerContoller extends Controller
{
    //
    public function viewBuyer(){
        $buyers = Buyer::all();
        return view('viewBuyer', compact('buyers'));
    }
}
