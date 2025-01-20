<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateDistrictController extends Controller
{
    public function districts_under_states($state_id)
    {
        $districts = State::where('state_id', $state_id)->get();
        return response()->json($districts);
    }
}
