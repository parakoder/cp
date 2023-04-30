<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;

class SolutionController extends Controller
{
    //
    public function index(Request $request){
        $solution_id = $request->query('solution-id');
        $data = Solution::where('solution_id', $solution_id)->first();
        $page = 'solution';
        $id = $solution_id;
        if($data)
            return view('solution', compact('data','page','id'));
        else
            abort(404);        
    }
}
