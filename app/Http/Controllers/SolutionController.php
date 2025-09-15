<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;
use App\Models\SolutionFeature;
use App\Models\SolutionAdvantage;

class SolutionController extends Controller
{
    //
    public function index(Request $request){
        $solution_id = $request->query('solution-id');
        $data = Solution::where('solution_id', $solution_id)->first();
        
        if($data){
            $features = SolutionFeature::where('solution_id', $data->id)->get();
            $advantages = SolutionAdvantage::where('solution_id', $data->id)->get();
            $page = 'solution';
            $id = $solution_id;

            return view('solution', compact('data', 'features', 'advantages', 'page', 'id'));
        } else {
            abort(404);
        }
    }
}
