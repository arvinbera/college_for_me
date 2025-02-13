<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\CollegeClaim;
use Illuminate\Http\Request;

class CollegeClaimController extends Controller
{
    public function claim_queries()
    {
        $select_college_ids = CollegeClaim::select('college_id')->groupBy('college_id')->get();
        $all_claim_queries = [];
        foreach ($select_college_ids as $college_id) {
            $college_details = College::with('college_address')->where('id', $college_id->college_id)->first();
            array_push($all_claim_queries, $college_details);
        }
        // return $all_claim_queries;
        return view('admin.college.claim.list', compact('all_claim_queries'));
    }

    public function claim_details($college_id)
    {
        $college_claimers = CollegeClaim::where('college_id', $college_id)->get();
        return view('admin.college.claim.details', compact('college_claimers'));
    }
}
