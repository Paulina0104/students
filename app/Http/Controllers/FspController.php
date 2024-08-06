<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\fsp_details;
use Illuminate\Http\Request;

class FspController extends Controller
{
    public function show()
    {
        $details = fsp_details::all();
        return view('FSP_detail',compact('details'));

    }   //

public function edit()
$details = find0rfail(id);
return view ('fsp2details',compact())

}

