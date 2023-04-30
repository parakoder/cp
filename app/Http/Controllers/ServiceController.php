<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function index(Request $request){
        $service_id = $request->query('service-id');
        $data = Service::where('service_id', $service_id)->first();
        $page = 'service';
        $id = $service_id;
        if($data)
            return view('service', compact('data','page','id'));
        else
            abort(404);        
    }
}
